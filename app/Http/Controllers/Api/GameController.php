<?php
/*
* File Name:  GameController.php
* Created on 8/27/2021
* (c) 2021 Bill Banks
*/


namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use App\Models\Game;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class GameController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index($tid)
    {
       $uid =  Auth()->id();

       $tour = Tournament::first($tid);
       if ($uid == $tour->user_id) {
           $games = Game::all()->where("tournament_id", $tid);
           return Response::json($games);

       }
        return Response::json([
            'message' => 'Unauthorized'
        ],401);



    }

    public function store(Request $request)
    {
        $game = new Game();
        $game->tournament_id = $request->tournament_id;
        $game->min_score =  $request->min_score;
        $game->name = $request->name;
        $game->save();
        return Response::json($game);



    }


    public function update(Request $request, $id)
    {
        $game = Game::find($id);
        $game->tournament_id = $request->tournament_id;
        $game->min_score =  $request->min_score;
        $game->name = $request->name;
        $game->save();
        return Response::json($game);


    }

    public function destroy($id)
    {
        $game = Game::destroy($id);
        return Response::json([
            'message' => 'OK'
        ],200);


    }
}
