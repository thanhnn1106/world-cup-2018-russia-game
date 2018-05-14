<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Teams;

class TeamTableController extends BaseController
{
    public function index(Request $request)
    {
        $data = [
            'groupA' => Teams::getTeamByGroupId(1),
            'groupB' => Teams::getTeamByGroupId(2),
            'groupC' => Teams::getTeamByGroupId(3),
            'groupD' => Teams::getTeamByGroupId(4),
            'groupE' => Teams::getTeamByGroupId(5),
            'groupF' => Teams::getTeamByGroupId(6),
            'groupG' => Teams::getTeamByGroupId(7),
            'groupH' => Teams::getTeamByGroupId(8),
        ];

        return view('front.team_table.index', $data);
    }
}