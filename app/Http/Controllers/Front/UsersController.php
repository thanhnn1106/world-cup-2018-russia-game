<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Matches;
use Illuminate\Support\Facades\Auth;

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
        ];

        return view('front.user_pre_history.index', $data);
    }

    public function predict(Request $request)
    {   echo "<pre>"; print_r($_POST);exit;
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