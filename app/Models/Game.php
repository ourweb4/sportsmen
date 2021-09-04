<?php

/*
* File Name:  Game.php
* Created on 8/26/2021
* (c) 2021 Bill Banks
*/


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{

    public function tournament() {
              return $this->belongsTo('app\Models\Tournament');
           }
}























