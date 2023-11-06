<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicsController;
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



Route::resource('admin/comics', ComicsController::class);



Route::get('/', function () {
    $comics = Comic::all();

    return view('home', ['comics' => $comics]);
})->name('home');
