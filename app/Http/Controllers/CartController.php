<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{

    public function index()
    {
        return view('front.basket');
    }

    public function store(Request $request)
    {
        $id = $request->id;
        $title = $request->title;
        $part_number = $request->part_number;
        $price = $request->price;
        $sale = $request->sale;
       
        if($price == null){ $price = 0; }
        if($sale != 0){ $price = $price - ($price * $sale / 100); }
        Cart::add($id, $title, 1, $price)->associate('App\Product');
        return redirect()->back();
    }


    public function update(Request $request)
    {
        $cart = Cart::update($request->prodid, $request->quantity);
        //session()->flash('success_message', 'Quantity was updated succesfully!');
        return response()->json(['success' => 'success']);
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message', 'Item has been removed');
    }
    
}
