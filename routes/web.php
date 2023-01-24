<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Dashboard\AdController;
use App\Http\Controllers\Dashboard\pollController;
use App\Http\Controllers\MessageController;
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
Route::get('/contact',[WebsiteController::class,'contact'])->name('contact');
Route::get('/new/{id}',[WebsiteController::class,'specialNew'])->name('specialNew');
Route::get('like/{id}',[WebsiteController::class,'like'])->name('like');
Route::post('message/store/{id}',[WebsiteController::class,'storeComment'])->name('comment.store');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
Route::post('message/store',[WebsiteController::class,'sendMessage'])->name('message.store');

Route::get('rate/{id}',[WebsiteController::class,'rate'])->name('rate');

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
        Route::get('create',[BlogController::class,'create'])->name('blog.create');
        Route::get('edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
        Route::post('update/{id}',[BlogController::class,'update'])->name('blog.update');
        Route::get('delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
        Route::post('create',[BlogController::class,'store'])->name('blog.store');

        Route::get('comment/delete/{id}',[BlogController::class,'deleteComment'])->name('comment.delete');
      });

      Route::group(['prefix'=>'questions'],function(){
        Route::get('index',[pollController::class,'index'])->name('poll.index');
        Route::get('create',[pollController::class,'create'])->name('poll.create');
        Route::get('show/{id}',[pollController::class,'show'])->name('poll.show');
        Route::get('edit/{id}',[pollController::class,'edit'])->name('poll.edit');
        Route::post('store',[pollController::class,'store'])->name('poll.store');
        Route::post('update/{id}',[pollController::class,'update'])->name('poll.update');
        Route::get('delete/{id}',[pollController::class,'delete'])->name('poll.delete');
      });

    Route::group(['prefix'=>'ads'],function(){
        Route::get('index',[AdController::class,'index'])->name('ad.index');
        Route::get('create',[AdController::class,'create'])->name('ad.create');
        Route::get('edit/{id}',[AdController::class,'edit'])->name('ad.edit');
        Route::get('show/{id}',[AdController::class,'show'])->name('ad.show');
        Route::post('store',[AdController::class,'store'])->name('ad.store');
        Route::post('update/{id}',[AdController::class,'update'])->name('ad.update');
        Route::get('delete/{id}',[AdController::class,'delete'])->name('ad.delete');
      });

      Route::group(['prefix'=>'messages'],function(){
        Route::get('index',[MessageController::class,'index'])->name('message.index');
      
      });


});
Auth::routes();
