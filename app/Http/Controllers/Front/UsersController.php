<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Matches;
use Illuminate\Support\Facades\Auth;
use DB;
use Validator;

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
                'is_lucky_star' => $request->get('is_lucky_star') == 1 ? 1 : 0,
            ];
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
                if ($params['is_lucky_star'] == 1) {
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

            $request->session()->flash('success', trans('common.msg_update_success'));
            return redirect()->route('front.home');

        }
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
}