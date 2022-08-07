<?php

namespace App\Http\Controllers;
use App\Models\Challenge;
use App\Models\User;
use App\Models\Solve;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isEmpty;

class FlagController extends Controller
{
    public function flag(Request $request){
        $chall = Challenge::where('flag',$request->flag)->get();
        $chall = json_decode($chall,true);
        if(empty($chall)){
            return redirect()->back()->with(['notValid' => "Flag is not correct"]);
        }
         // Check if the flag is already Submit

        $check=Solve::where("challenge_id",$request->challenge_id)->where("user_id",$request->user_id)->get();
        $check = json_decode($check,true);

        if(!empty($check)){
            return redirect()->back()->with(["already"=>"Sorry flag is already submit"]);
        }

        Solve::create($request->all());
        return redirect()->back()->with(['success'=>"Flag is correct congrats !"]);

    }
}
