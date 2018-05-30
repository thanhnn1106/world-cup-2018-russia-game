<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teams;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;
use Illuminate\Support\Facades\Hash;

class UsersController extends BaseController
{
    public function predictionHistory(Request $request)
    {
        $params = [
            'user_id' => Auth::id()
        ];
        $userHistoryList = User::getUserPreHistory($params);
        $data = [
            'userHistoryList' => $userHistoryList,
            'match_status'    => config('site.match_status.label')
        ];

        return view('front.user_pre_history.index', $data);
    }

    public function predict(Request $request)
    {
        if ($request->isMethod('POST')) {
            $isLuckyStar = $request->get('is_lucky_star');
            if ($isLuckyStar !== NULL) {
                $checkIfUsed = User::find(Auth::id());
                if ($checkIfUsed->luckystar == 0) {
                    $request->session()->flash('error', trans('You already used lucky star.'));
                    return redirect()->route('front.home');
                }
            }
            $params = [
                'user_id'       => Auth::id(),
                'match_id'      => $request->get('match_id'),
                'home_score'    => $request->get('home_score'),
                'away_score'    => $request->get('away_score'),
                'team_win'      => $request->get('match_result'),
            ];
            if ($request->get('is_lucky_star')) {
                $params['is_lucky_star'] = $request->get('is_lucky_star') == 1 ? 1 : 0;
            }
            $rules = $this->_setRules($params);

            // run the validation rules on the inputs from the form
            $validator = Validator::make($params, $rules);

            if ($validator->fails()) {
                return redirect()->route('front.home')
                                ->withErrors($validator)
                                ->withInput();
            }

            $chkExistRecord = DB::table('users_matches')
                ->where('user_id', $params['user_id'])
                ->where('match_id', $params['match_id'])
                ->first();

            if ($chkExistRecord === NULL) {
                $params['created_at'] = date('Y-m-d H:i:s');
                DB::table('users_matches')->insert($params);
                if (isset($params['is_lucky_star']) && $params['is_lucky_star'] == 1) {
                    DB::table('users')->where('id', '=', $params['user_id'])
                        ->update([
                            'luckystar' => 0
                        ]);
                }

                $request->session()->flash('success', trans('common.msg_save_success'));
                return redirect()->route('front.home');
            }

            $params['updated_at'] = date('Y-m-d H:i:s');
            DB::table('users_matches')
               ->where('user_id', $params['user_id'])
               ->where('match_id', $params['match_id'])
               ->update($params);
            if (isset($params['is_lucky_star']) && $params['is_lucky_star'] == 1) {
                DB::table('users')->where('id', '=', $params['user_id'])
                    ->update([
                        'luckystar' => 0
                ]);
            }

            $request->session()->flash('success', trans('common.msg_update_success'));
            return redirect()->route('front.home');

        }
    }

    public function predictChampion(Request $request)
    {
        $teamList = Teams::all();
        $chkExistRecord = DB::table('user_champion')
            ->where('user_id', Auth::user()->id)
            ->first();
        $data = [
            'teamList' => $teamList,
            'chkExistRecord' =>($chkExistRecord == NULL) ? '' : $chkExistRecord->team_id,
            'totalUser' => count(DB::table('user_champion')->select('*')->get())
        ];
        if ($request->isMethod('POST')) {
            $teamId = $request->get('teamId');
            $checkTeam = Teams::find($teamId);
            if ($checkTeam == NULL) {
                $request->session()->flash('error', trans('Team is not exist.'));
                return redirect()->route('front.predict_champion');
            }

            if ($chkExistRecord == NULL) {
                DB::table('user_champion')->insert([
                    'user_id' => Auth::user()->id,
                    'team_id' => $teamId
                ]);

                $request->session()->flash('success', trans('Your predict was updated.'));
                return redirect()->route('front.predict_champion');
            }

            DB::table('user_champion')
               ->where('user_id', Auth::user()->id)
               ->update([
                   'team_id' => $teamId
               ]);

            $request->session()->flash('success', trans('Your predict was saved.'));
            return redirect()->route('front.predict_champion');
        }

        return view('front.user_predict_champion.index', $data);
    }

    private function _setRules($request)
    {
        $rules =  array(
            'user_id'      => 'required|numeric|exists:users,id',
            'match_id'     => 'required|numeric|exists:matches,id',
            'home_score'   => 'required|numeric|min:0',
            'away_score'   => 'required|numeric|min:0',
            'team_win'     => 'required|numeric|in:0,1,2',
        );

        return $rules;
    }

    public function changePass(Request $request, $userId = null)
    {
        if ($request->isMethod('POST')) {
            $currentPass    = $request->get('current_password');
            $newPass        = $request->get('new_password');
            $confirmNewPass = $request->get('confirm_password');
            if (!Hash::check($currentPass, Auth::user()->password)) {
                $request->session()->flash('error', trans('common.change_password.msg_invalid_current_password'));
                return redirect()->route('front.change_password');
            }

            $rules =  array(
                'new_password'     => 'required|min:8',
                'confirm_password' => 'required_with:new_password|same:new_password|min:8',
            );
            $params = [
                'new_password'     => $newPass,
                'confirm_password' => $confirmNewPass
            ];
            // run the validation rules on the inputs from the form
            $validator = Validator::make($params, $rules);

            if ($validator->fails()) {
                return redirect()->route('front.change_password')
                                ->withErrors($validator)
                                ->withInput();
            }
            $userIndfo = User::find(Auth::user()->id);
            $userIndfo->password = bcrypt($params['new_password']);
            $userIndfo->save();

            $request->session()->flash('success', trans('common.change_password.msg_changed_password_success'));
            return redirect()->route('front.change_password');
        }

        return view('front.user_change_password.index');
    }

}