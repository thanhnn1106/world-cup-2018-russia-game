<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\Matches;

class MatchesController extends BaseController
{
    public function index(Request $request)
    {
        $matchList = Matches::all();
        $data = [
            'matchList' => $matchList,
            'status'   => config('site.match_status.label')
        ];
        return view('front.matches.index', $data);
    }
}