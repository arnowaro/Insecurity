<?php

use App\Http\Controllers\Admin\BackofficeController;
use App\Http\Controllers\HistoryController;
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
//test
Route::get('/test', function () {
    return view('home');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/', function () {
    return view('welcome');
});


// page form create history
Route::get('/history/create', [HistoryController::class, 'create'])->name('history.create');

Route::controller(BackofficeController::class)->group(function () {
    Route::get('/admin2/', 'show')->name('backoffice');
});

// route home
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
