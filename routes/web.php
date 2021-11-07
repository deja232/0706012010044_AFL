<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameCont;
use App\Http\Controllers\GenreCont;
use App\Http\Controllers\RekomCont;
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
    return view('home', ['title' => 'Home', 'pagetitle' => 'Welcome']);
});
Route::get('/recommendation', [RekomCont::class, 'index']);
Route::get('/contact', [RekomCont::class, 'about']);
Route::resource('games', GameCont::class);
Route::resource('genres', GenreCont::class); 
