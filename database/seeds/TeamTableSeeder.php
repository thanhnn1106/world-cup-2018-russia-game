<?php

use Illuminate\Database\Seeder;
use App\Models\Teams;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = array(
            [
                'group_id'      => 1,
                'group_name'    => 'Group A',
                'name'          => 'Russia',
                'fifa_position' => 66,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43965/topstories.html'
            ],
            [
                'group_id'      => 1,
                'group_name'    => 'Group A',
                'name'          => 'Saudi Arabia',
                'fifa_position' => 70,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43835/index.html'
            ],
            [
                'group_id'      => 1,
                'group_name'    => 'Group A',
                'name'          => 'Egypt',
                'fifa_position' => 46,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43855/index.html'
            ],
            [
                'group_id'      => 1,
                'group_name'    => 'Group A',
                'name'          => 'Uruguay',
                'fifa_position' => 17,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43930/index.html'
            ],
            [
                'group_id'      => 2,
                'group_name'    => 'Group B',
                'name'          => 'Morocco',
                'fifa_position' => 42,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43872/index.html'
            ],
            [
                'group_id'      => 2,
                'group_name'    => 'Group B',
                'name'          => 'Iran',
                'fifa_position' => 36,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43817/index.html'
            ],
            [
                'group_id'      => 2,
                'group_name'    => 'Group B',
                'name'          => 'Portugal',
                'fifa_position' => 4,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43963/index.html'
            ],
            [
                'group_id'      => 2,
                'group_name'    => 'Group B',
                'name'          => 'Spain',
                'fifa_position' => 8,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43969/index.html'
            ],
            [
                'group_id'      => 3,
                'group_name'    => 'Group C',
                'name'          => 'France',
                'fifa_position' => 7,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43946/index.html'
            ],
            [
                'group_id'      => 3,
                'group_name'    => 'Group C',
                'name'          => 'Australia',
                'fifa_position' => 40,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43976/index.html'
            ],
            [
                'group_id'      => 3,
                'group_name'    => 'Group C',
                'name'          => 'Peru',
                'fifa_position' => 11,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43929/index.html'
            ],
            [
                'group_id'      => 3,
                'group_name'    => 'Group C',
                'name'          => 'Denmark',
                'fifa_position' => 12,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43941/index.html'
            ],
            [
                'group_id'      => 4,
                'group_name'    => 'Group D',
                'name'          => 'Argentina',
                'fifa_position' => 5,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43922/index.html'
            ],
            [
                'group_id'      => 4,
                'group_name'    => 'Group D',
                'name'          => 'Iceland',
                'fifa_position' => 22,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43951/index.html'
            ],
            [
                'group_id'      => 4,
                'group_name'    => 'Group D',
                'name'          => 'Croatia',
                'fifa_position' => 18,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43922/index.html'
            ],
            [
                'group_id'      => 4,
                'group_name'    => 'Group D',
                'name'          => 'Nigeria',
                'fifa_position' => 47,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43876/index.html'
            ],
            [
                'group_id'      => 5,
                'group_name'    => 'Group E',
                'name'          => 'Costa Rica',
                'fifa_position' => 25,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43901/index.html'
            ],
            [
                'group_id'      => 5,
                'group_name'    => 'Group E',
                'name'          => 'Serbia',
                'fifa_position' => 35,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=1902465/index.html'
            ],
            [
                'group_id'      => 5,
                'group_name'    => 'Group E',
                'name'          => 'Brazil',
                'fifa_position' => 2,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43924/index.html'
            ],
            [
                'group_id'      => 5,
                'group_name'    => 'Group E',
                'name'          => 'Switzerland',
                'fifa_position' => 6,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43876/index.html'
            ],
            [
                'group_id'      => 6,
                'group_name'    => 'Group F',
                'name'          => 'Germany',
                'fifa_position' => 1,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=1902465/index.html'
            ],
            [
                'group_id'      => 6,
                'group_name'    => 'Group F',
                'name'          => 'Mexico',
                'fifa_position' => 15,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43911/index.html'
            ],
            [
                'group_id'      => 6,
                'group_name'    => 'Group F',
                'name'          => 'Sweden',
                'fifa_position' => 23,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43970/index.html'
            ],
            [
                'group_id'      => 6,
                'group_name'    => 'Group F',
                'name'          => 'Korea Republic',
                'fifa_position' => 61,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43822/index.html'
            ],
            [
                'group_id'      => 7,
                'group_name'    => 'Group G',
                'name'          => 'Belgium',
                'fifa_position' => 3,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43935/index.html'
            ],
            [
                'group_id'      => 7,
                'group_name'    => 'Group G',
                'name'          => 'Panama',
                'fifa_position' => 55,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43914/index.html'
            ],
            [
                'group_id'      => 7,
                'group_name'    => 'Group G',
                'name'          => 'Tunisia',
                'fifa_position' => 14,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43888/index.html'
            ],
            [
                'group_id'      => 7,
                'group_name'    => 'Group G',
                'name'          => 'England',
                'fifa_position' => 13,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43942/index.html'
            ],
            [
                'group_id'      => 8,
                'group_name'    => 'Group H',
                'name'          => 'Colombia',
                'fifa_position' => 16,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43926/index.html'
            ],
            [
                'group_id'      => 8,
                'group_name'    => 'Group H',
                'name'          => 'Japan',
                'fifa_position' => 60,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43819/index.html'
            ],
            [
                'group_id'      => 8,
                'group_name'    => 'Group H',
                'name'          => 'Poland',
                'fifa_position' => 10,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43962/index.html'
            ],
            [
                'group_id'      => 8,
                'group_name'    => 'Group H',
                'name'          => 'Senegal',
                'fifa_position' => 28,
                'link_profile'  => 'http://www.fifa.com/worldcup/teams/team=43879/index.html'
            ],
        );

        foreach ($teams as $team) {
            DB::table('teams')->insert($team);
        }
    }
}
