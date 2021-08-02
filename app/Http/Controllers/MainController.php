<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		$recommended = Product::inRandomOrder()->limit(4)->get();
		$newProducts = Product::orderBy('id', 'desc')->limit(8)->get();
		return view('front.index', compact('newProducts', 'recommended'));
	}

	public function categoryProductsMenu($id)
	{
		$category = Category::where('id', $id)->first();
		$data = Product::where('category_id', $id)->paginate(20);

		return view('front.categoryProducts', compact('category', 'data'));
	}

	public function categoryProducts($id)
	{
		$category = Category::where('id', $id)->first();
		$categoryIds = Category::where('parent_id', $id)->pluck('id')->all();
		$categoryIds2 = Category::whereIn('parent_id', $categoryIds)->pluck('id')->all();
		
		$data = Product::whereIn('category_id', array_merge($categoryIds, $categoryIds2))->paginate(20);
		return view('front.categoryProducts', compact('category', 'data'));
	}
	
	public function singleProduct($id)
	{
		$data = Product::where('id', $id)->first();
		return view('front.product', compact('data'));
	}

	public function brandProducts($id)
	{
		$data = Product::where('brand_id', $id)->paginate(12);
		return view('front.brandProducts');
	}

	public function blog()
	{
		return view('front.blog');
	}

	public function delivery()
	{
		return view('front.delivery');
	}

	public function favourites()
	{
		return view('front.favourites');
	}
	
	public function publicOffer()
	{
		return view('front.publicOffer');
	}
}
