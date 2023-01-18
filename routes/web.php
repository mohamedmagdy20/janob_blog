<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
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

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::get()

Route::middleware(['auth'])->prefix('dashboard')->group(function(){

    Route::group(['prefix'=>'users'],function(){
        Route::get('profile',[UserController::class,'index'])->name('users.profile');

    });
});
Auth::routes();
