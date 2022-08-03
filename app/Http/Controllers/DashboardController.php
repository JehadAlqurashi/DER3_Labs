<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Challenge;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
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
    public function challenge(){
        $chall = Challenge::select("id","title","score","category","description","hint")->get();

        return view("dashboard.challenge",compact("chall"));
    }
    public function challEdit($id){
        $chall = Challenge::whereId($id)->get();
        return view("dashboard.challEdit",compact("chall"));

    }
}
