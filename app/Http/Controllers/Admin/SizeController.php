<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{	
	public function getSizes() {
			$data = Size::all();
			return response()->json($data, 200);
	}

	public function index() {
			return view('admin.size.index');
	}

	public function create($id) {
			return view('admin.size.create', compact('id'));
	}

	public function store(Request $request){
			$this->validate($request,[
					'name' => 'required',
			]);
			$data = Size::create($request->all());
			return response()->json($data, 200);
	}

	public function destroy($id){
			Size::find($id)->delete();
			return response()->json(['success' => true], 200);
	}
}
