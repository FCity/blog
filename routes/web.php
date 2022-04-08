<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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
    //return str('hello blog')->slug();
})->name('home');

Route::controller(PostsController::class)->group(function () {
    Route::get('/posts', 'index')->name('index');
    Route::get('/posts/create', 'create')->name('create');
    Route::post('/posts', 'store')->name('store');
    Route::get('/posts/{id}', 'show')->name('show');
    Route::get('/posts/{id}/edit', 'edit')->name('edit');
    Route::put('/posts/{id}', 'update')->name('update');
    Route::delete('/posts/{id}', 'destroy')->name('destroy');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/endpoint', function () {
    //return redirect()->route('home');
    return to_route('home');
});