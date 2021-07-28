<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		$recommended = Product::inRandomOrder()->limit(4)->get();
		$newProducts = Product::orderBy('id', 'desc')->limit(8);
		return view('front.index', compact('newProducts', 'recommended'));
	}

	public function categoryProducts($id)
	{
		$data = Product::where('category_id', $id)->paginate(12);
		return view('front.index');
	}

	public function brandProducts($id)
	{
		$data = Product::where('brand_id', $id)->paginate(12);
		return view('front.index');
	}

	public function basket()
	{
		return view('front.basket');
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

	public function forBoys()
	{
		return view('front.for-boys');
	}

	public function forGirls()
	{
		return view('front.for-girls');
	}

	public function forMen()
	{
		return view('front.for-men');
	}

	public function forWomen()
	{
		return view('front.for-women');
	}
	
	public function publicOffer()
	{
		return view('front.publicOffer');
	}
}
