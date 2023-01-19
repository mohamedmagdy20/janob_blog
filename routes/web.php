<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Dashboard\AdController;
use App\Http\Controllers\Dashboard\pollController;
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

Route::get('/',[WebsiteController::class,'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


Route::middleware(['auth'])->prefix('dashboard')->group(function(){

    Route::group(['prefix'=>'users'],function(){
        Route::get('profile',[UserController::class,'index'])->name('users.profile');
        Route::get('edit',[UserController::class,'edit'])->name('users.edit');
        Route::get('verify',[UserController::class,'verify'])->name('users.verify');
        Route::post('check',[UserController::class,'checkVerfication'])->name('user.check');
        Route::get('change_password_view',[UserController::class,'changePasswordView'])->name('change.password.view');
        Route::post('update',[UserController::class,'update'])->name('users.update');
        Route::get('resend',[UserController::class,'resend'])->name('users.resend');
        Route::post('change_password',[UserController::class,'changePassword'])->name('users.change.password');
    });

    Route::group(['prefix'=>'blogs'],function(){
        Route::get('index',[BlogController::class,'index'])->name('blogs.index');
        Route::get('show/{id}',[BlogController::class,'show'])->name('blog.show');
        Route::get('edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
        Route::post('update/{id}',[BlogController::class,'update'])->name('blog.update');
        Route::post('delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
      });

      Route::group(['prefix'=>'questions'],function(){
        Route::get('index',[pollController::class,'index'])->name('poll.index');
        Route::get('create',[pollController::class,'create'])->name('poll.create');
        Route::get('show/{id}',[pollController::class,'show'])->name('poll.show');
        Route::get('edit/{id}',[pollController::class,'edit'])->name('poll.edit');
        Route::post('update/{id}',[pollController::class,'update'])->name('poll.update');
        Route::post('delete/{id}',[pollController::class,'delete'])->name('poll.delete');
      });

    Route::group(['prefix'=>'Ads'],function(){
        Route::get('index',[AdController::class,'index'])->name('Ad.index');
        Route::get('create',[AdController::class,'create'])->name('Ad.create');
        Route::get('edit',[AdController::class,'edit'])->name('Ad.edit');
        Route::get('show',[AdController::class,'show'])->name('Ad.show');
      });

});
Auth::routes();
