<?php

namespace App\Http\Controllers;

use App\Models\Challenge;
use App\Models\Solved;

class ScoreController extends Controller
{
    public function index(){
        return view("hackerboard");
    }

    ///  Calculates the score for each individual player.
    /// returen integer

    public function getScoresPerPlayer($id){


        $score = 0;

            $solutions= Solved::where('user_id', $id)->get([

            'challenge_id',
            'user_id'
        ]);


            foreach($solutions as $solution){

                $points = Challenge::where('id', $solution['challenge_id'])->get();
                foreach($points as $point) {
                    $score =+ $point->score;
                }
            }
            return $score;
    }

    // gets the player scores
        // return array

        public function getScores(){

            $users = User::where('user_type','User')->get([
               'id' ,'name'
            ]);

            $score_array = [];


            foreach($users as $user){

                $score = $this->getScoresPerPlayer($user->id);
                $id = $user->id;
                $name = $user->name;
                $arr = array(
                    'id' => $id,
                    'name' => $name,
                    'score' => $score
                );
                array_push($score_array, $arr);

            }

            $score_collection = collect($score_array);
            $score_sorted = $score_collection->sortByDesc('score');

            return view('hackerboard')->with('scores',$score_sorted);
        }



}
