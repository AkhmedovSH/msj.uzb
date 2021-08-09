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

		public function getProduct($id)
    {
        $data = Product::where('id', $id)->first();

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
        $data->uploadSizeImage($request->file('size_image'));
        $data->uploadMultipleImages($request->file('images'));
        return response()->json($data, 200);
    }

    public function edit($id)
    {
			return view('admin.product.edit', compact('id'));
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
				$data->uploadSizeImage($request->file('size_image'));
        $data->uploadMultipleImages($request->file('images'));
        return response()->json($data, 200);
    }

		public function hideProduct($id, Request $request)
    {
        $data = Product::find($id);
        $data->hide = $data->hide ? 0 : 1;
        $data->save();
        return response()->json($data, 200);
    }

		public function hideProducts(Request $request)
    {
				foreach ($request->list as $key => $value) {
					$data = Product::find($value);
					$data->hide = $data->hide ? 0 : 1;
					$data->save();
				}
        return response()->json([], 200);
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

		public function destroyProducts(Request $request)
    {
			foreach ($request->products as $key => $value) {
				Product::find($value)->remove();
			}

			return response()->json($data, 200);
    }
}
