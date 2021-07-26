<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/check_curl', 'App\Http\Controllers\HomeController@getData');
Route::get('list',[ListController::class,'show']);
Route::get('edit/{id}',[ListController::class,'edit']);
Route::post('edit/',[ListController::class,'update']);
