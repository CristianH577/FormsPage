<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('home.index');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return Redirect::back();
});

Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/request', [HomeController::class, 'request'])->name('request');
Route::post('/request', [HomeController::class, 'send'])->name('send');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin-destroy');