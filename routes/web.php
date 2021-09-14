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
//Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');


Route::get('/', function () {
    return view('/profiles/index');
});

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

Route::get('posts/create', function () {
    return view('/posts/create');
});

//Route::get('/profile/{user}', [App\Http\Controllers\PostsController::class, 'index'])->name('profile.show');
Route::get('/p/{post}', 'App\Http\Controllers\PostsController@show');

Route::get('/p/create', 'App\Http\Controllers\PostsController@create');
Route::post('/p', 'App\Http\Controllers\PostsController@store');

Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', 'App\Http\Controllers\ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');





Auth::routes();





