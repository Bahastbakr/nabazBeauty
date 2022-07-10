<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function () {

    //Product
    Route::controller(ProductController::class)->group(function () {
        Route::get('/admin/product', 'index')->name('indexProduct');
        Route::get('/admin/product/create',  'create')->name('createProduct');
        Route::post('/admin/product/create',  'store')->name('storeProduct');
        Route::get('/admin/product/{id}/edit',  'edit')->name('editProduct');
        Route::put('/admin/product/{id}/edit',  'update')->name('updateProduct');
        Route::delete('/admin/product/{id}/delete',  'delete')->name('deleteProduct');
    });

    //brand
    Route::controller(BrandController::class)->group(function () {
        Route::get('/admin/brand', 'index')->name('indexBrand');
        Route::post('/admin/brand/create',  'store')->name('storeBrand');
        Route::get('/admin/brand/{id}/edit',  'edit')->name('editBrand');
        Route::put('/admin/brand/{id}/edit',  'update')->name('updateBrand');
        Route::delete('/admin/brand/{id}/delete',  'delete')->name('deleteBrand');
    });
});
