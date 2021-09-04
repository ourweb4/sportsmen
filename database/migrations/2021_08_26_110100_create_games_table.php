<?php
 /*
* File Name:  CreateGamesTable.php
* Created on 8/26/2021
* (c) 2021 Bill Banks
*/


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->integer('tournament_id');
            $table->string('name');
            $table->float("min_score");

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('games');
    }
}
