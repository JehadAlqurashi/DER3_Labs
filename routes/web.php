<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get("/", function (){
    return view("home");
})->name("homepage");



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/score",[App\Http\Controllers\ScoreController::class,"hackerboard"])->name("score")->middleware("auth");
Route::group(['prefix'=>"dashboard"],function(){
    Route::get("/",[App\Http\Controllers\DashboardController::class,"index"]);
    ###################### users #######################
    Route::get("/users",[App\Http\Controllers\DashboardController::class, "users"])->name("dashboard.users"); // to show users


    Route::get("/users/create",[App\Http\Controllers\DashboardController::class,"createUser"])->name("dashboard.users.create");;
    Route::post("/users/create/new",[App\Http\Controllers\DashboardController::class,"createNewUser"])->name("dashboard.users.create.new");


    Route::post("/users/edit/{id}",[App\Http\Controllers\DashboardController::class, "editing"])->name("dashboard.users.editing");
    Route::get("/users/{id}",[App\Http\Controllers\DashboardController::class, "edit"])->name("dashboard.users.edit");
    Route::get("/users/delete/{id}",[App\Http\Controllers\DashboardController::class, "deleteUser"])->name("dashboard.users.delete");



    ###################### users #######################


    ###################### challenges #######################
    Route::get("/challenge",[App\Http\Controllers\DashboardController::class,"challenge"])->name("dashboard.challenge");
    Route::get("/challenge/edit/{id}",[App\Http\Controllers\DashboardController::class,"challEdit"])->name("dashboard.challenge.edit");
    Route::post("/challenge/update",[App\Http\Controllers\DashboardController::class,"challUpdate"])->name("dashboard.challenge.update");
    Route::get("/challenge/delete/{id}",[App\Http\Controllers\DashboardController::class,"challDelete"])->name("dashboard.challenge.delete");
    Route::get("/challenge/create",[App\Http\Controllers\DashboardController::class,"challCreate"])->name("dashboard.challenge.create");
    Route::post("/challenge/new",[App\Http\Controllers\DashboardController::class,"challNew"])->name("dashboard.challenge.newChall");

    ###################### challenges #######################








    ##################### score routes ######################

});



?>
