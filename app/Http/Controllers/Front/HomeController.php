<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\Matches;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        $todayMatch = Matches::getToDayMatch();
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