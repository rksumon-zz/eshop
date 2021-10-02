<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AdminLoginController;
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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/login', [AdminLoginController::class,'index'])->name('login');
Route::post('/admin/login/submit', [AdminLoginController::class,'login_submit']);
Route::post('/admin/register/submit', [AdminLoginController::class,'register']);

Route::get('/product', [ProductController::class, 'index']);
