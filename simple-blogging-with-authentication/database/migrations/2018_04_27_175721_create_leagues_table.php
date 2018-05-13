<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable()->default('');
            $table->timestamps();
        });

        Schema::create('league_bookmakers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('league_id');
            $table->integer('bookmaker_id');
            $table->timestamps();
        });

        Schema::create('bookmakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leagues');
        Schema::dropIfExists('league_bookmakers');
        Schema::dropIfExists('bookmakers');
    }
}
