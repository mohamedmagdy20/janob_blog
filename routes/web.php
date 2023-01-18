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
        Route::get('edit',[UserController::class,'edit'])->name('users.edit');
        Route::get('verify',[UserController::class,'verify'])->name('users.verify');
        Route::get('check',[UserController::class,'checkVerfication'])->name('user.check');
        Route::post('update',[UserController::class,'update'])->name('users.update');
        Route::post('resend',[UserController::class,'resend'])->name('users.resend');
        Route::get('change_password',[UserController::class,'changePassword'])->name('users.change.password');
    });
});
Auth::routes();
