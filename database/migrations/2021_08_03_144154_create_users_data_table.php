<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersDataTable extends Migration
{

    public function up()
    {
        Schema::create('users_data', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->float('total_amount', 8, 2);
            $table->float('due_amount', 8, 2);
            $table->enum('account_type', ['club', 'member']);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('club_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zipcode');
            $table->string('phone');
            $table->string('email');
            $table->string('website');
            $table->string('photo_url');
            $table->string('country');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users_data');
    }
}
