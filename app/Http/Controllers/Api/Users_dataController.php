<?php
/*
 * Copyright (c) 2021-2021. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */


/*
* File Name: Users_dataController.php
* Created on 8/16/2021
* (c) 2021 Bill Banks
*/

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Models\UsersData;
use Illuminate\Support\Facades\Response;

class Users_dataController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:api');
    }


    public function index()
    {
        $uid = Auth()->id();
        $udata = UsersData::firstOrCreate(['user_id'],[$uid]);
        if ($udata->user_id == 0) {
            $udata->user_id = $uid;
            $udata->save();

        }
        return Response::json($udata);
    }

    public function update(Request $request, $id)
    {
        $uid = Auth()->id();
        $udata = UsersData::find($id);
        if ($uid == $udata->user_id) {
            $udata->user_id=$request->user_id;
            $udata->first_name=$request->first_name;
            $udata->last_name=$request->last_name;
            $udata->club_name=$request->club_name;
            $udata->address=$request->address;
            $udata->city=$request->city;
            $udata->state=$request->state;
            $udata->country=$request->country;
            $udata->zipcode=$request->zipcode;
            $udata->phone=$request->phone;
            $udata->account_type=$request->account_type;
            $udata->email=$request->email;
            $udata->website=$request->website;
            $udata->photo_url=$request->photo_url;
            $udata->total_amount=$request->total_amount;
            $udata->due_amount=$request->due_amount;
            $udata->save();


            return Response::json([
                'message' => 'OK'
            ],200);
        }
        return Response::json([
            'message' => 'Unauthorized'
        ],401);
    }

    public function destroy($id)
    {
        $uid = Auth()->id();
        $udata = UsersData::find($id);
        if ($uid == $udata->user_id) {
            UsersData::destroy($id);
            return Response::json([
                'message' => 'OK'
            ],200);
        }
        return Response::json([
            'message' => 'Unauthorized'
        ],401);
    }

}
