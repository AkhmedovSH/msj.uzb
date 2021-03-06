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
        $name = $request->name;
        $price = $request->price;
        if($price == null){ $price = 0; }
        Cart::add($id, $name, 1, $price, 0, ['size' => $request->size])->associate('App\Models\Product');
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
