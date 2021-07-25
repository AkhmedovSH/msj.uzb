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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/basket', [\App\Http\Controllers\MainController::class, 'basket']);
Route::get('/blog', [\App\Http\Controllers\MainController::class, 'blog']);
Route::get('/delivery', [\App\Http\Controllers\MainController::class, 'delivery']);
Route::get('/favourites', [\App\Http\Controllers\MainController::class, 'favourites']);
Route::get('/for-boys', [\App\Http\Controllers\MainController::class, 'forBoys']);
Route::get('/for-girls', [\App\Http\Controllers\MainController::class, 'forGirls']);
Route::get('/for-men', [\App\Http\Controllers\MainController::class, 'forMen']);
Route::get('/for-women', [\App\Http\Controllers\MainController::class, 'forWomen']);
Route::get('/public-offer', [\App\Http\Controllers\MainController::class, 'publicOffer']);


Route::group(['prefix' => 'admin'], function () {
	Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index']);
	Route::resource('/category', \App\Http\Controllers\Admin\CategoryController::class);
	Route::resource('/slider', \App\Http\Controllers\Admin\SliderController::class);
	Route::resource('/product', \App\Http\Controllers\Admin\ProductController::class);
	Route::resource('/brand', \App\Http\Controllers\Admin\BrandController::class);
	Route::resource('/size', \App\Http\Controllers\Admin\SizeController::class);
});