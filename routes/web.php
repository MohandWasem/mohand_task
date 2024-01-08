<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logOutController;
use App\Http\Controllers\User\userController;
use App\Http\Controllers\User\loginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::controller(userController::class)->group(function(){
  Route::get('index','index')->name("web/index");
  Route::post('add','add')->name('web/add');
  Route::post('data','form')->name('web/data');
});

Route::controller(loginController::class)->group(function(){
  Route::get('login','login')->name('login');
 
});

Route::controller(logOutController::class)->group(function(){
  Route::get('logout','logout')->name('web/logout');

});