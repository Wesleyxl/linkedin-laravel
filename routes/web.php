<?php

// controllers
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\NoticeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'feed'], function () {
        Route::get('/', [FeedController::class, 'index'])->name('feed');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('profile', [UserController::class, 'profile'])->name('profile');
    });

    Route::group(['prefix' => 'jobs'], function () {
        Route::get('/', [JobsController::class, 'index'])->name('jobs');
    });

    Route::group(['prefix' => 'notice'], function() {
        Route::get('/', [NoticeController::class, 'index'])->name('notice');
    });

    Route::group(['prefix' => 'chat'], function() {
        Route::get('/', [ChatController::class, 'index'])->name('chat');
    });

    Route::group(['prefix' => 'network'], function () {
        Route::get('/', [NetworkController::class, 'index'])->name('network');
    });

});

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    }
    );
});
