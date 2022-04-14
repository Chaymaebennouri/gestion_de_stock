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

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Route::get('/categorie',function(){
    return view('categorie');
})->middleware(['auth'])->name('categorie');

require __DIR__.'/auth.php';

Route::get('/contact',function(){
    return view('contact');
})->middleware(['auth'])->name('contact');

require __DIR__.'/auth.php';
