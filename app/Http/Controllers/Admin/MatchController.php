<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matches;
use Validator;
use Illuminate\Support\Facades\DB;

class MatchController extends Controller
{
    public function index(Request $request)
    {
        $paramSearch['filter_id_show'] = $request->get('filter_id_show');
        $data = array(
            'matches'        => Matches::getList($paramSearch),
            'filter_id_show' => $paramSearch['filter_id_show'],
            'status'         => config('site.match_status.label')
        );

        return view('admin.matches.list', $data);
    }

    public function edit(Request $request, $matchId)
    {
        $match = Matches::find($matchId);
        if ($match === NULL) {
            $request->session()->flash('error', trans('common.msg_data_not_found'));
            return redirect(route('admin.matches.edit'));
        }

        $data = array(
            'actionForm' => route('admin.matches.edit', ['matchId' => $matchId]),
            'matchInfo'  => $match,
            'title'      => 'Cập nhật',
            'status'         => config('site.match_status.label')
        );
        if ($request->isMethod('POST')) {

            $rules = $this->_setRules($request, $matchId);

            // run the validation rules on the inputs from the form
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->route('admin.matches.edit', ['matchId' => $matchId])
                            ->withErrors($validator)
                            ->withInput();
            }

            $match->home_score    = $request->get('home_score');
            $match->away_score    = $request->get('away_score');
            $match->is_show       = $request->get('is_show');
            $match->is_lucky_star = $request->get('is_lucky_star');
            $match->status        = $request->get('status');
            $match->save();

            $request->session()->flash('success', trans('common.msg_update_success'));
            return redirect()->route('admin.matches');
        }

        return view('admin.matches.form', $data);
    }

    public function delete(Request $request, $matchId)
    {
        $match = Matches::find($matchId);
        if ($match === NULL) {
            $request->session()->flash('error', trans('common.msg_data_not_found'));
            return redirect(route('admin.matches'));
        }

        $match->delete();

        $request->session()->flash('success', trans('common.msg_delete_success'));
        return redirect()->route('admin.matches');
    }

    private function _setRules($request, $id = null)
    {
        $status = array_keys(config('site.match_status.label'));

        $rules =  array(
            'status'        => 'required|in:'. implode(',', $status),
            'is_show'       => 'required|in:0,1',
            'is_lucky_star' => 'required|in:0,1',
        );

        return $rules;
    }
}