<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('match_id');
            $table->integer('home_score');
            $table->integer('away_score');
            $table->integer('team_win')->nullable()->comment('0=draw, 1=home, 2=away');
            $table->integer('win_match')->nullable();
            $table->integer('win_score')->nullable();
            $table->integer('is_lucky_star');
            $table->integer('point')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->unique(['user_id', 'match_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_matches');
    }
}
