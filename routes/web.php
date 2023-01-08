<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\PostController;




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
Route::get('/file', function () {
    return view('welcome');
});

Route::post('fileUpload', [PostController::class, 'fileUpload'])->name('fileUpload');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/login/store', [LoginController::class, 'store']);
Route::post('/login/store', [LoginController::class, 'store']);
Route::post('/signup/store', [SignupController::class, 'store']);
Route::post('/post/store', [PostController::class, 'store']);
Route::get('/data', [PostController::class, 'random_data']);


Route::get('/logout/store', [LoginController::class, 'logout']);


Route::middleware(['auth'])->group(function () {

    Route::prefix('/home')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
    });

    Route::prefix('/')->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
    });

    Route::get('/profile', [HomeController::class, 'getProfile']);

});
