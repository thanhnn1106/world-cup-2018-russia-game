<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Matches;

class UserRankingController extends BaseController
{
    public function index(Request $request)
    {
        $userRankingList = User::getUserRanking();
        $data = [
            'userRankingList' => $userRankingList,
        ];

        return view('front.user_ranking.index', $data);
    }
}