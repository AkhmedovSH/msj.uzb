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
	Route::resource('/slider', \App\Http\Controllers\Admin\SliderController::class);
	Route::resource('/product', \App\Http\Controllers\Admin\ProductController::class);
	
	

	Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
	Route::get('/category/create/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'create']);
	Route::post('/category/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);
	Route::get('/subcategory/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'subCategory']);
	Route::delete('/category/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

	/* REST */
	Route::get('/get-main-categories', [\App\Http\Controllers\Admin\CategoryController::class, 'getMainCategoriees']);
	Route::get('/get-child-categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'getChildCategories']);

	Route::resource('/size', \App\Http\Controllers\Admin\SizeController::class);
	Route::get('/size/create/{id}', [\App\Http\Controllers\Admin\SizeController::class, 'create']);
	Route::put('/size/store/{id}', [\App\Http\Controllers\Admin\SizeController::class, 'store']);
	Route::get('/get-sizes', [\App\Http\Controllers\Admin\SizeController::class, 'getSizes']);

	Route::resource('/brand', \App\Http\Controllers\Admin\BrandController::class);
	Route::get('/get-brands', [\App\Http\Controllers\Admin\BrandController::class, 'getBrands']);
});