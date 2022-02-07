<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\drivercontroller;
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


Route::resource('driver',drivercontroller::class);
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/dashboard',function(){
   return view('dashboard');
})->middleware('auth');

Route::get('redirects','App\Http\Controllers\homecontroller@index')->middleware('auth');