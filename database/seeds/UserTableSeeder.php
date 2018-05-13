<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = config('site.user_status.value.active');
        $users = [
            array(
                'name'       => 'Nguyễn Ngọc Thanh',
                'email'      => 'ngthanh@gmail.com',
                'password'   => bcrypt('123456'),
                'status'     => $status,
                'created_at' => date(DATETIME_FORMAT),
            ),
            array(
                'name'       => 'Nguyễn Hoàng Thy',
                'email'      => 'nthy@gmail.com',
                'password'   => bcrypt('123456'),
                'status'     => $status,
                'created_at' => date(DATETIME_FORMAT),
            ),
        ];

        foreach ($users as $user) {
            $chkUser = User::where('email', $user['email'])->first();
            if ($chkUser === NULL) {
                DB::table('users')->insert($user);
            }
        }

        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'name'       => $faker->name,
                'email'      => $faker->email,
                'password'   => bcrypt($faker->password),
                'status'     => rand(0,1),
                'created_at' => date(DATETIME_FORMAT),
            ]);
        }
    }
}
