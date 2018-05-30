<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matches;
use Validator;
use DB;

class MatchController extends Controller
{
    public function index(Request $request)
    {
        $paramSearch['filter_is_show'] = $request->get('filter_is_show');
        $paramSearch['filter_status']  = $request->get('filter_status');
        $data = array(
            'matches'        => Matches::getList($paramSearch),
            'is_show'        => config('site.match_show.label'),
            'filter_is_show' => $paramSearch['filter_is_show'],
            'status'         => config('site.match_status.label'),
            'filter_status'  => $paramSearch['filter_status']
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
        );

        return $rules;
    }

    public function updateResult(Request $request, $matchId)
    {
        $matchInfo = Matches::find($matchId);
        $userMatchList = DB::table('users_matches')
            ->select('user_id')
            ->where('match_id', '=', $matchId)
            ->get()->toArray();
//        echo "<pre>"; print_r($userMatchList);exit;
        // Caculate result
        foreach ($userMatchList as $um) {
            $updateResult = DB::table('users_matches')
                ->where('user_id', '=', $um->user_id)
                ->where('match_id', '=', $matchInfo->id)
                ->first();
            $point = 0;
            $isWinScore = 0;
            $isWinMatch = 0;
            if ($matchInfo->home_score == $updateResult->home_score &&
                $matchInfo->away_score == $updateResult->away_score)
            {
                $isWinScore = 1;
                $point = $point + 200;
            }

            if ($matchInfo->home_score > $matchInfo->away_score && $updateResult->team_win == 1)
            {
                $isWinMatch = 1;
                $point = $point + 100;
            }

            if ($matchInfo->home_score < $matchInfo->away_score && $updateResult->team_win == 2)
            {
                $isWinMatch = 1;
                $point = $point + 100;
            }

            if ($matchInfo->home_score == $matchInfo->away_score && $updateResult->team_win == 0)
            {
                $isWinMatch = 1;
                $point = $point + 100;
            }

            if ($updateResult->is_lucky_star == 1)
            {
                $point = $point * 2;
            }

            DB::table('users_matches')
                ->where('user_id', '=', $um->user_id)
                ->where('match_id', '=', $matchInfo->id)
                ->update([
                    'win_match' => $isWinMatch,
                    'win_score' => $isWinScore,
                    'point'     => $point,
                ]);
        }
        DB::table('matches')
                ->where('id', '=', $matchInfo->id)
                ->update([
                    'status' => 3,
                ]);
        $request->session()->flash('success', trans('common.msg_update_success'));
        return redirect()->route('admin.matches');
    }
}