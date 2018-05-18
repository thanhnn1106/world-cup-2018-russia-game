<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\Matches;
use DB;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        $todayMatch = Matches::getToDayMatch();
        if ($this->isLogged) {

            foreach ($todayMatch as $item) {
                $chkExistRecord = DB::table('users_matches')
                    ->where('user_id', $this->user->id)
                    ->where('match_id', $item->id)
                    ->first();

                if ($chkExistRecord) {
                    $item->home_score    = $chkExistRecord->home_score;
                    $item->away_score    = $chkExistRecord->away_score;
                    $item->team_win      = $chkExistRecord->team_win;
                    $item->is_lucky_star = $chkExistRecord->is_lucky_star;
                }
            }
        }

        $data = [
            'todayMatch' => $todayMatch
        ];

        return view('front.index', $data);
    }

    public function group(Request $request)
    {
        return view('front.group');
    }
}