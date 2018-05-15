<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Teams;

class TeamsController extends BaseController
{
    public function index(Request $request)
    {
        $groupFilter = $request->get('filter_group');
        switch ($groupFilter) {
            case 1: $data = ['groupA' => Teams::getTeamByGroupId(1)];
                break;
            case 2: $data = ['groupB' => Teams::getTeamByGroupId(2)];
                break;
            case 3: $data = ['groupC' => Teams::getTeamByGroupId(3)];
                break;
            case 4: $data = ['groupD' => Teams::getTeamByGroupId(4)];
                break;
            case 5: $data = ['groupE' => Teams::getTeamByGroupId(5)];
                break;
            case 6: $data = ['groupF' => Teams::getTeamByGroupId(6)];
                break;
            case 7: $data = ['groupG' => Teams::getTeamByGroupId(7)];
                break;
            case 8: $data = ['groupH' => Teams::getTeamByGroupId(8)];
                break;
            default:
                $data = [
                    'groupA' => Teams::getTeamByGroupId(1),
                    'groupB' => Teams::getTeamByGroupId(2),
                    'groupC' => Teams::getTeamByGroupId(3),
                    'groupD' => Teams::getTeamByGroupId(4),
                    'groupE' => Teams::getTeamByGroupId(5),
                    'groupF' => Teams::getTeamByGroupId(6),
                    'groupG' => Teams::getTeamByGroupId(7),
                    'groupH' => Teams::getTeamByGroupId(8),
                    'listGroup' => config('site.group_info'),
                    'filterGroup' => $request->get('filter_group')
                ];
                break;
        }
        $data['filterGroup'] = $groupFilter;
        $data['listGroup']   = config('site.group_info');

        return view('admin.teams.list', $data);
    }

    public function edit(Request $request, $teamId)
    {
        $team = Teams::find($teamId);
        if ($team === NULL) {
            $request->session()->flash('error', trans('common.msg_data_not_found'));
            return redirect(route('admin.teams'));
        }

        $data = array(
            'actionForm' => route('admin.teams.edit', ['teamId' => $teamId]),
            'team'       => $team,
            'title'      => 'Update',
        );

        if ($request->isMethod('POST')) {

            $rules = $this->_setRules($request, $teamId);

            // run the validation rules on the inputs from the form
            $validator = Validator::make($request->all(), $rules);

            if ($validator->fails()) {
                return redirect()->route('admin.teams.edit', ['team' => $team])
                            ->withErrors($validator)
                            ->withInput();
            }

            $team->play       = $request->get('play');
            $team->win        = $request->get('win');
            $team->draw       = $request->get('draw');
            $team->lose       = $request->get('lose');
            $team->goal_for   = $request->get('goal_for');
            $team->goal_again = $request->get('goal_again');
            $team->point      = $request->get('point');
            $team->save();

            $request->session()->flash('success', trans('common.msg_update_success'));
            return redirect()->route('admin.teams');
        }

        return view('admin.teams.form', $data);
    }

    private function _setRules($request)
    {
        $rules =  array(
            'play'       => 'required|numeric',
            'win'        => 'required|numeric',
            'draw'       => 'required|numeric',
            'lose'       => 'required|numeric',
            'goal_for'   => 'required|numeric',
            'goal_again' => 'required|numeric',
            'point'      => 'required|numeric',
        );

        return $rules;
    }
}