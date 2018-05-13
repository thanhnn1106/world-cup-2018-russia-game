<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Matches;
use Faker\Factory as Faker;

class UserMatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1200; $i++) {
            DB::table('users_matches')->insert([
                'user_id'       => rand(1,50),
                'match_id'      => rand(1,49),
                'home_score'    => rand(0,6),
                'away_score'    => rand(0,6),
                'win_match'     => rand(0,1),
                'win_score'     => rand(0,1),
                'away_score'    => rand(0,6),
                'is_lucky_star' => rand(0,1),
                'point'         => rand(0,3),
                'created_at'    => date(DATETIME_FORMAT),
            ]);
        }
    }
}
