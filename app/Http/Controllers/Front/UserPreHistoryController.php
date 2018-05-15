<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Matches;
use Illuminate\Support\Facades\Auth;

class UserPreHistoryController extends BaseController
{
    public function index(Request $request)
    {
        $params = [
            'user_id' => Auth::id()
        ];
        $userHistoryList = User::getUserPreHistory($params);
        $data = [
            'userHistoryList' => $userHistoryList,
        ];

        return view('front.user_pre_history.index', $data);
    }
}