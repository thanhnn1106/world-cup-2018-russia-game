<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index(Request $request)
    {
        return view('front.index');
    }
    public function team(Request $request)
    {
        return view('front.team');
    }
    public function pointTable(Request $request)
    {
        return view('front.table-point');
    }
    public function fixture(Request $request)
    {
        return view('front.fixture');
    }
    public function group(Request $request)
    {
        return view('front.group');
    }
    public function result(Request $request)
    {
        return view('front.result');
    }
}