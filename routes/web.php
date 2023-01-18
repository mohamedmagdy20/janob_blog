<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\BlogController;

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
        Route::post('check',[UserController::class,'checkVerfication'])->name('user.check');
        Route::get('change_password_view',[UserController::class,'changePasswordView'])->name('change.password.view');
        Route::post('update',[UserController::class,'update'])->name('users.update');
        Route::post('resend',[UserController::class,'resend'])->name('users.resend');
        Route::get('change_password',[UserController::class,'changePassword'])->name('users.change.password');
    });

    Route::group(['prefix'=>'blogs'],function(){
        Route::get('index',[BlogController::class,'index'])->name('blogs.index');
        Route::get('show/{id}',[BlogController::class,'show'])->name('blog.show');
        Route::get('edit/{id}',[BlogController::class,'edit'])->name('blog.edit');
        Route::post('update/{id}',[BlogController::class,'update'])->name('blog.update');
        Route::post('delete/{id}',[BlogController::class,'delete'])->name('blog.delete');
      });
});
Auth::routes();
