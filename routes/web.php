<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\PageController;

use App\Models\Comic;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('user', PageController::class);
Route::resource('admin', AdminController::class);

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/comics', function () {
    return view('comics');
})->name('comics');
