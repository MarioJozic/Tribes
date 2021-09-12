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
//Route::get('/tribe/{user}', [App\Http\Controllers\TribesController::class, 'index'])->name('tribe.index');


Route::get('/home', function () {
    return view('home');
});

Route::get('/playlist', function () {
    return view('playlist');
});

Route::get('/tribe', function () {
    return view('tribe');
});


Route::get('/edit', function () {
    return view('edit');
});




Auth::routes();


Route::get('/tribe/{user}', [App\Http\Controllers\TribesController::class, 'index'])->name('tribe.index');


Route::get('/', function () {
    return view('welcome');
});