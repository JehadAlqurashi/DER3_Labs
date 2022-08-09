<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index(){
        return view("auth.admin.login");
    }
    public function login(AdminLoginRequest $request){
        if(Auth::guard("admin")->attempt(["email"=>$request->email,"password"=>$request->password])){
            return redirect()->intended("dashboard/users");
        }
        return redirect()->back()->with(['invalid'=> 'One of the credentials are incorrect ']);
    }
}
