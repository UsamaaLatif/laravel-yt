<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ServiceController;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/show', 'ServiceController@show');


//Route::view('/add','/layouts/jobs/add_job');
Route::get('/add','JobController@addJob');
Route::post('/add',[JobController::class,'addData']);

// Route::get('/add', function () {
//     return view('/layouts/jobs/add_job');
// });
