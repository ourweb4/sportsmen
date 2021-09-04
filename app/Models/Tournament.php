<?php
/*
 * Copyright (c) 2021. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

/*
* File Name:  Tournament.php
* Created on 8/17/2021
* (c) 2021 Bill Banks
*/


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'user_id'.'start','end'.'name'.'description'
    ];

    public function games() {
        return $this->belongsToMany('App\Models\Game');

    }

    public function members() {
        return $this->belongsToMany('App\Models\Members_tournament');
    }
}


