<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\ProductLengthType;
use Illuminate\Http\Request;
use PhpParser\Node\Attribute;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::orderBy('id', 'DESC')->paginate(20);

        return view('admin.product.index', compact('data'));
		}

		public function getProducts()
    {
        $data = Product::orderBy('id', 'DESC')->paginate(20);

        return response()->json($data, 200);
		}
		
		public function search(Request $request)
    {
        $data = Product::where('title', 'like', '%' . $request->title . '%')->paginate(30);

        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name', 'id')->all();
        $products = Product::pluck('name', 'id')->all();
        return view('admin.product.create', compact('categories', 'products'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image',
        ]);

        $data = Product::add($request->all());
        $data->uploadImage($request->file('image'));
        $data->uploadMultipleImages($request->file('images'));
        return response()->json($data, 200);
    }

    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|image'
        ]);

        $data = Product::find($id);
        $data->edit($request->all());
        $data->uploadImage($request->file('image'));
        $data->uploadMultipleImages($request->file('images'));
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->remove();

        return redirect()->route('product.index');
    }
}
