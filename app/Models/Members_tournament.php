<?php
/*
 * Copyright (c) 2021. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

/*
* File Name:  Members_tournament.php
* Created on 8/18/2021
* (c) 2021 Bill Banks
*/


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members_tournament extends Model
{
    protected $fillable = [
        'user_id','tournament_id','game_id','score'
    ];

   public function tournament() {
       return $this->belongsTo('App\Models\Tournaments');
   }
}
