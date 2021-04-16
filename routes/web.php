<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/api-doc/example', [App\Http\Controllers\ExampleController::class, 'document']);

// Facebook
Route::get('/facebook/bind', [App\Http\Controllers\FacebookController::class, 'bind'])->name('facebook.bind');
Route::get('/facebook/login', [App\Http\Controllers\FacebookController::class, 'login'])->name('facebook.login');



