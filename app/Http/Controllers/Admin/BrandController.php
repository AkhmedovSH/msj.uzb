<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
	public function getBrands() {
		$data = Brand::all();
		return response()->json($data, 200);
	}
	
	public function index() {
		return view('admin.brand.index');
	}

	public function create() {
		return view('admin.brand.create');
	}

	public function store(Request $request){
			$this->validate($request,[
					'name' => 'required',
			]);
			$data = Brand::create($request->all());
			return response()->json($data, 200);
	}

	public function edit($id){
			$brand = Brand::find($id);
			return view('admin.brand.edit', compact('brand'));
	}

	public function update(Request $request, $id){
			$this->validate($request,[
					'name' => 'required',
			]);
			$data = Brand::find($id);
			$data->update($request->all());

			return response()->json($data, 200);
	}

	public function destroy($id){
			Brand::find($id)->delete();
			return redirect()->route('category.index');
	}
}
