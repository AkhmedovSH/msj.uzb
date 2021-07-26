<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
		public function getMainCategoriees() {
			$data = Category::where('parent_id', 0)->with('childs')->get();
			return response()->json($data, 200);
		}
		
		public function getChildCategories($id) {
			$data = Category::where('parent_id', $id)->get();
			return response()->json($data, 200);
		}

    public function index(){
        return view('admin.category.index');
    }

    public function create($id) {
			return view('admin.category.create', compact('id'));
    }

		public function subCategory($id) {
			$category = Category::where('id', $id)->first();
			return view('admin.category.childCategories', compact('id', 'category'));
		}

    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required',
        ]);
        Category::create($request->all());
        return redirect()->route('category.index');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', ['category' => $category]);
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'title' => 'required',
        ]);
        $category = Category::find($id);

        $category->update($request->all());

        return redirect()->route('categories.index');
    }

    public function destroy($id){
        Category::find($id)->delete();
        return redirect()->route('category.index');
    }
}