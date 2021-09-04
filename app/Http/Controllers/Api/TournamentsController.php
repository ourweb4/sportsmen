<?php


/*
* File Name:  TournamentsController.php
* Created on 8/17/2021
* (c) 2021 Bill Banks
*/


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tournament;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TournamentsController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        $uid = Auth()->id();
        $tdata = Tournament::all()->where('user_id',$uid);
        return response()->json($tdata);

    }

    public function store(Request $request)
    {
        $tdata = Tournament::firstOrCreate($request->id);
        $tdata->user_id = Auth()->id();
        $tdata->start = $request->start;
        $tdata->end = $request->end;
        $tdata->name = $request->name;
        $tdata->description = $request->description;
        $tdata->save();
        return response()->json($tdata);

    }




    public function update(Request $request, $id)
     {
         $tdata = Tournament::first($id);
         $tdata->user_id = Auth()->id();
         $tdata->start = $request->start;
         $tdata->end = $request->end;
         $tdata->name = $request->name;
         $tdata->description = $request->description;
         $tdata->save();
         return response()->json($tdata);

    }

    public function destroy($id)
    {

        $uid = Auth()->id();

        $tournament = Tournament::first($id);


        if ($uid == $tournament->user_id) {
//             $id = $tournament->id;
            Tournament::destroy($id);
            return Response::json([
                'message' => 'OK'
            ],200);
        }
        return Response::json([
            'message' => 'Unauthorized'
        ],401);
    }
}
