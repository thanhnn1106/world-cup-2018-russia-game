<?php

use Illuminate\Database\Seeder;
use App\Models\Matches;

class MatchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $matches = array();
        $file = fopen(dirname(__FILE__)."/data/fixtures.csv","r");
        while($tempData = fgetcsv($file, 1000, ',')) {
            $data = array(
                'round'       => $tempData[0],
                'match_date'  => date('Y-m-d H:i:s', strtotime(str_replace('/', '-', $tempData[1]))),
                'location'    => $tempData[2],
                'home_team'   => $tempData[3],
                'away_team'   => $tempData[4],
//                'home_score'  => rand(0,6),
//                'away_score'  => rand(0,6),
                'group'       => $tempData[5],
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            );
            $matches[] = $data;
        }
        fclose($file);

        foreach ($matches as $match) {
            DB::table('matches')->insert($match);
        }
    }
}
