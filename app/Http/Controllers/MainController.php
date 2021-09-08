<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
	public function index()
	{
		$recommended = Product::where('hide', 0)->inRandomOrder()->limit(4)->get();
		$newProducts = Product::where('hide', 0)->orderBy('id', 'desc')->limit(8)->get();
		$posts = Post::limit(8)->orderBy('id', 'DESC')->get();
		return view('front.index', compact('newProducts', 'recommended', 'posts'));
	}

	public function categoryProductsMenu($id)
	{
		$category = Category::where('id', $id)->first();
		$data = Product::where('category_id', $id)->where('hide', 0)->paginate(20);

		return view('front.categoryProducts', compact('category', 'data'));
	}

	public function categoryProducts($id)
	{
		$category = Category::where('id', $id)->first();
		$categoryIds = Category::where('parent_id', $id)->pluck('id')->all();
		$categoryIds2 = Category::whereIn('parent_id', $categoryIds)->pluck('id')->all();
		
		$data = Product::whereIn('category_id', array_merge($categoryIds, $categoryIds2))->where('hide', 0)->paginate(20);
		return view('front.categoryProducts', compact('category', 'data'));
	}
	
	public function singleProduct($id)
	{
		$data = Product::where('id', $id)->where('hide', 0)->first();
		return view('front.product', compact('data'));
	}

	public function brandProducts($brand_id)
	{
		$brand = Brand::where('id', $brand_id)->first();
		$data = Product::where('brand_id', $brand_id)->where('hide', 0)->paginate(12);
		return view('front.brandProducts', compact('brand', 'data'));
	}

	public function blog($id)
	{
		$data = Post::where('id', $id)->first();
		return view('front.blog', compact('data'));
	}

	public function addFavourite($id)
	{
		if(Session::get('favourites')) {

			$array = Session::get('favourites');
			$exist = in_array($id, $array);

			if($exist) {
				if (($key = array_search($id, $array)) !== false) {
					unset($array[$key]);
				}
			} else {
				array_push($array, $id);
			}

			Session::put('favourites', $array);
		} else {
			$array = array();
			array_push($array, $id);
			Session::put('favourites', $array);
		}

		return response()->json(['success' => 'success']);
		// return redirect()->back();
	}

	public function delivery()
	{
		return view('front.delivery');
	}

	public function favourites()
	{
		$array = [];
		if(Session::get('favourites') != null) {
			$array = Session::get('favourites');
		}
		$data = Product::whereIn('id', $array)->get();
		return view('front.favourites', compact('data'));
	}
	
	public function publicOffer()
	{
		return view('front.publicOffer');
	}
}
