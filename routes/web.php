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

Auth::routes();

Route::get('/locale/{locale}', function ($locale) {
	App::setLocale($locale);
	session(['language' => $locale]);
	return redirect()->back();
});

Route::get('/category-products/{id}', [\App\Http\Controllers\MainController::class, 'categoryProducts'])->name('category.products');
Route::get('/category-products-menu/{id}', [\App\Http\Controllers\MainController::class, 'categoryProductsMenu'])->name('category.products.menu');
Route::get('/brand-products/{id}', [\App\Http\Controllers\MainController::class, 'brandProducts'])->name('brand.products');

Route::get('/product/{id}', [\App\Http\Controllers\MainController::class, 'singleProduct'])->name('product');
Route::get('/basket', [\App\Http\Controllers\CartController::class, 'index'])->name('basket');
Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order');
Route::post('/payment', [\App\Http\Controllers\OrderController::class, 'payment'])->name('payment');
Route::get('/payment-success/{phone}', [\App\Http\Controllers\OrderController::class, 'paymentSuccess'])->name('paymentSuccess');

Route::get('/add/favourite/{id}', [\App\Http\Controllers\MainController::class, 'addFavourite'])->name('add.favourite');


Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/blog/{id}', [\App\Http\Controllers\MainController::class, 'blog']);
Route::get('/delivery', [\App\Http\Controllers\MainController::class, 'delivery']);
Route::get('/favourites', [\App\Http\Controllers\MainController::class, 'favourites']);
Route::get('/public-offer', [\App\Http\Controllers\MainController::class, 'publicOffer']);

// Route::get('/for-boys/{id}', [\App\Http\Controllers\MainController::class, 'forBoys']);
// Route::get('/for-girls/{id}', [\App\Http\Controllers\MainController::class, 'forGirls']);
// Route::get('/for-men/{id}', [\App\Http\Controllers\MainController::class, 'forMen']);
// Route::get('/for-women/{id}', [\App\Http\Controllers\MainController::class, 'forWomen']);

Route::get('/cart', [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{product}', [\App\Http\Controllers\CartController::class, 'destroy'])->name('cart.destroy');
Route::patch('/cart/update', [\App\Http\Controllers\CartController::class, 'update'])->name('cart.update');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
	Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.index');
	Route::resource('/slider', \App\Http\Controllers\Admin\SliderController::class);
	Route::resource('/product', \App\Http\Controllers\Admin\ProductController::class);

	Route::get('/product/destroy/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy']);
	Route::get('/product/edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']);
	
	Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
	Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('category.edit');
	Route::get('/category/create/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'create']);
	Route::post('/category/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store']);

	Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']);

	Route::get('/category/child/create/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'childCreate']);
	Route::post('/category/child/store', [\App\Http\Controllers\Admin\CategoryController::class, 'childStore']);
	Route::get('/subcategory/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'subCategory'])->name('subcategory.index');
	Route::delete('/category/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']);
	Route::get('/category/destroy/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'destroy']);

	/* REST */
	Route::get('/get-products', [\App\Http\Controllers\Admin\ProductController::class, 'getProducts']);
	Route::get('/get-product/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'getProduct']);
	Route::post('/product/edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update']);
	Route::post('/product/hide/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'hideProduct']);
	Route::post('/product/all/hide', [\App\Http\Controllers\Admin\ProductController::class, 'hideProducts']);
	Route::post('/product/all/destroy', [\App\Http\Controllers\Admin\ProductController::class, 'destroyProducts']);

	Route::get('/get-main-categories', [\App\Http\Controllers\Admin\CategoryController::class, 'getMainCategoriees']);
	Route::get('/get-child-categories/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'getChildCategories']);

	Route::resource('/size', \App\Http\Controllers\Admin\SizeController::class);
	Route::get('/size/create/{id}', [\App\Http\Controllers\Admin\SizeController::class, 'create']);
	Route::put('/size/store/{id}', [\App\Http\Controllers\Admin\SizeController::class, 'store']);
	Route::get('/get-sizes', [\App\Http\Controllers\Admin\SizeController::class, 'getSizes']);
	Route::delete('/size/{id}', [\App\Http\Controllers\Admin\SizeController::class, 'destroy']);

	Route::resource('/brand', \App\Http\Controllers\Admin\BrandController::class);
	Route::get('/get-brands', [\App\Http\Controllers\Admin\BrandController::class, 'getBrands']);
	Route::get('/brand/destroy/{id}', [\App\Http\Controllers\Admin\BrandController::class, 'destroy']);

	Route::resource('/post', \App\Http\Controllers\Admin\PostController::class);
	Route::get('/post/destroy/{id}', [\App\Http\Controllers\Admin\PostController::class, 'destroy']);
	Route::post('/post/update/{id}', [\App\Http\Controllers\Admin\PostController::class, 'update']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'web'], function () {
	Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
	Route::post('/laravel-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
	// list all lfm routes here...
});
