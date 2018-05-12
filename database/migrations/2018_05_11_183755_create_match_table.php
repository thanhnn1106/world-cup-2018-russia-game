<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('round')->nullable();
            $table->string('home_team')->nullable();
            $table->string('away_team')->nullable();
            $table->integer('home_score')->nullable();
            $table->integer('away_score')->nullable();
            $table->datetime('match_date');
            $table->integer('is_lucky_star')->default(0)->comment('0=inactive, 1=active');
            $table->string('group')->nullable();
            $table->string('location')->nullable();
            $table->integer('is_show')->default(0)->comment('0=inactive, 1=active');
            $table->integer('status')->default(0)->comment('0=coming, 1=playing, 2=finished, 3=updated_result');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
