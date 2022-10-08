<?php

use App\Http\Controllers\Admin\BackofficeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
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
// Route::get('/test', function () {
//     return view('home');
// });

// homecontroller
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/homecategory/{id}', [HomeController::class, 'homecategory'])->name('homecategory');


Route::controller(BackofficeController::class)->group(function () {
    Route::get('/admin/', 'show')->name('dashboard');
    Route::get('/admin/users', 'indexUsers')->name('users.index');
    Route::get('/admin/users/{id}', 'deleteUser')->name('users.delete');
});

// middleware admin
Route::middleware(['auth', 'Admin'])->group(function () {


Route::controller(CategoryController::class)->group(function () {
    Route::get('admin/category', 'index')->name('category.index');
    Route::get('admin/category/create', 'create')->name('category.create');
    Route::post('admin/category/create', 'store')->name('category.store');
    Route::get('admin/category/{id}/edit', 'edit')->name('category.edit');
    Route::post('admin/category/{id}', 'update')->name('category.update');
    Route::delete('admin/category/{id}', 'delete')->name('category.delete');

});

});
Route::controller(HistoryController::class)->group(function () {
    Route::middleware(['auth', 'Admin'])->group(function () {
    Route::get('admin/history', 'index')->name('history.index'); });


    Route::middleware(['auth'])->group(function () {
        Route::get('/history/create', 'create')->name('history.create');
        Route::post('/history/create', 'store')->name('history.store');
        Route::get('/history/{id}/edit', 'edit')->name('history.edit');
        Route::post('/history/{id}', 'update')->name('history.update');
        Route::delete('/history/{id}', 'delete')->name('history.delete');

        Route::get('/admin/history', 'indexHistories')->name('history.index');

    });
    Route::get('/history/{id}', 'show')->name('history.show');
    // index home category{id}
    Route::get('/history/category/{id}', 'index')->name('history.index.category');

});


// Route::get('/', function () {
//     return view('welcome');
// });


// page form create history



// route home
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
