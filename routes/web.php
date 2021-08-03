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
    return view('home');
});
Route::get('/sport', function () {
    return view('sport');
});
Route::get('/gospel', function () {
    return view('gospel');
});
Route::get('/networking', function () {
    return view('networking');
});
Route::get('/women', function () {
    return view('women');
});
Route::get('/business', function () {
    return view('business');
});
Route::get('/admin', function () {
    return view('home');
})->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
