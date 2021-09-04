<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersData extends Model
{
    protected $fillable=['user_Id','first_name','last_name','address','email'];
}
