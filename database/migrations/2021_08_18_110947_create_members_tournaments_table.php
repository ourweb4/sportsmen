<?php

/*
* File Name:  CreateMembersTournamentsTable.php
* Created on 8/18/2021
* (c) 2021 Bill Banks
*/


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTournamentsTable extends Migration
{
    public function up()
    {
        Schema::create('members_tournaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('tournament_id');
            $table->integer('game_id');
            $table->float('score');

            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('members_tournaments');
    }
}
