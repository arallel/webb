<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\drivercontroller;
use App\Http\Controllers\logoutcontroller;
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


// Route::resource('driver',drivercontroller::class);
Route::get('/', function () {
    return view('auth.login');
});
Route::post('logout', [logoutcontroller::class, 'logout'])->name('logout') ;
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard',function(){
        return view('dashboard'); 
    });
     Route::get('profil', function () {
         return view('profile.driver');
     });
     Route::get('user', function () {
        return view('driver.Registerdriver');
    });
     Route::get('home', function () {
        return view('home');
    });
    Route::get('profile', 'drivercontroller@edit')->name('driver.edit');
    Route::patch('profile', 'drivercontroller@update')
        ->name('driver.update');
});

Route::get('redirects','App\Http\Controllers\homecontroller@index')->middleware('auth');
