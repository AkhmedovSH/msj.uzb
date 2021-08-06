<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
		public function getCategories($id) {
			$data = Category::all();
			return response()->json($data, 200);
		}

		public function getMainCategoriees() {
			$data = Category::where('parent_id', 0)
			->with(['childs' => function ($query) {
				$query->with('childs');
			}])->get();
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

		public function childCreate($id) {
			return view('admin.category.createChildCategory', compact('id'));
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

		public function childStore(Request $request){
			$this->validate($request,[
					'name' => 'required',
			]);
			Category::create($request->all());
			return redirect()->route('subcategory.index', $request->parent_id);
		}

    public function edit($id){
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $category = Category::find($id);
				
        $newData = $category->edit($request->all());
				//dd($newData);
        return redirect()->route('category.index');
    }

    public function destroy($id){
        Category::find($id)->delete();
				return response()->json(['success' => true], 200);
        //return redirect()->route('category.index');
    }
}