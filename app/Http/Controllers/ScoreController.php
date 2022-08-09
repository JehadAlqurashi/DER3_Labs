<?php

namespace App\Http\Controllers;
use App\Models\Challenge;
use App\Models\Solve;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ScoreController extends Controller
{
    public function index(){

       $user =  DB::table("solved")->join("users","users.id" ,"=","solved.user_id")->join("challenges","challenges.id" , "=","solved.challenge_id")
           ->select(DB::raw("SUM(challenges.score) as score"),DB::raw("ROW_NUMBER() OVER() AS row"),"users.name",DB::raw("COUNT(users.name) as solve"))->groupBy('users.id')->get();


        return view("hackerboard",compact("user"));
    }

    ///  Calculates the score for each individual player.
    /// returen integer



}
