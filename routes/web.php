<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\AdminController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('dashboard');
})->name('home');

Route::group(['prefix'=>'/home', 'middleware' => 'checklogin'], function() {
    Route::get('/', [AdminController::class, 'index'])->name('index');
});

Route::get('/login', [LoginController::class, 'index'])->name('index');
Route::post('/user-login', [LoginController::class, 'userLogin'])->name('user.login');
Route::get('/register', [LoginController::class, 'signUp'])->name('register');
Route::post('/user-register', [LoginController::class, 'userSignUp'])->name('user.register');
Route::get('/change-password', [LoginController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [LoginController::class, 'updatePassword'])->name('update-password');
Route::get('/logout', [LoginController::class, 'logOut'])->name('logout');
