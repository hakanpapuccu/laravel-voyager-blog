<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/article/{slug}', [App\Http\Controllers\ArticleController::class, 'index'])->name('article');

Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('contact', [App\Http\Controllers\ContactController::class, 'insert']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
