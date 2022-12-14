<?php

namespace App\Http\Controllers;
use App\Http\Requests\EditChallRequest;
use App\Http\Requests\NewChallRequest;
use App\Models\User;
use App\Models\Challenge;
use App\Http\Requests\EditUserRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    ######################Users######################
    public function index(){
        return view("dashboard.index");
    }
    public function users(){
        $users = User::select("id","name","email")->get();
        return view("dashboard.users",compact("users"));
    }
    public function edit($id){
       $user =  User::whereId($id)->get();
        return view("dashboard.userEdit",compact("user"));
    }
    public function editing(EditUserRequest $request , $id){

        $user = User::where('id',$id)->update(['name'=>$request->name,'email'=>$request->email]);
        $success = "Edit Information Successfully";
        return redirect()->route("dashboard.users")->with(['success'=> 'saved successfully']);
    }

    public function deleteUser($id){
        User::whereId($id)->delete();
        $users = User::select("id","name","email")->get();
        return redirect()->route("dashboard.users")->with(['success' =>" Delete User Successfully"]);

    }
    public function createUser(){
        return view("dashboard.createUser");
    }
    public function createNewUser(RegisterRequest $request){
        $hash = bcrypt($request->password);
        User::create([
            'name'=>$request->name,
            'email' => $request->email,
            'password'=>$hash
        ]);
        return redirect()->route("dashboard.users");


    }

    ######################Users######################

    ######################Challenge######################
    public function challenge(){
        $chall = Challenge::select("id","title","score","category","description","hint","link")->get();

        return view("dashboard.challenge",compact("chall"));
    }
    public function challEdit($id){
        $chall = Challenge::whereId($id)->get();
        return view("dashboard.challEdit",compact("chall"));

    }
    public function challUpdate(EditChallRequest $request){
        $challenge = Challenge::find($request->id);
        $challenge->update($request->all());
        return redirect()->route('dashboard.challenge')->with(['success'=>"The Changes Has Been Updated"]);

    }
    public function challDelete($id){
        Challenge::whereId($id)->delete();
        return redirect()->back()->with(['success' =>" Delete Challenge Successfully"]);

    }


    public function challCreate(){
         //$chall = Challenge::select("id","title","score","category","description","hint")->get();


        return view('dashboard.challCreate');
    }

        public function ChallNew(NewChallRequest $request){

        Challenge::create($request->all());
            return redirect()->route("dashboard.challenge");

        }

    ######################Challenge######################
}
