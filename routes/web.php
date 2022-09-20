<?php

use App\Http\Controllers\Admin\BackofficeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
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

Route::controller(BackofficeController::class)->group(function () {
    Route::get('/admin/', 'show')->name('dashboard');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('admin/category', 'index')->name('category');
    Route::get('admin/category/create', 'create')->name('category.create');
    Route::post('admin/category', 'store')->name('category.store');
    Route::get('admin/category/{id}/edit', 'edit')->name('category.edit');
    Route::post('admin/category/{id}', 'update')->name('category.update');
});

Route::controller(SubCategoryController::class)->group(function () {
    Route::get('admin/subcategory', 'index')->name('subcategory');
    Route::get('admin/subcategory/create', 'create')->name('subcategory.create');
});

Route::controller(HistoryController::class)->group(function () {
    Route::get('admin/history', 'index')->name('subcategory');
    Route::get('/history/create', 'create')->name('history.create');

});

Route::get('/history', function () {
    return view('history');
});

Route::get('/', function () {
    return view('welcome');
});


// page form create history



// route home
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
