<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
	public function index()
	{
			$data = Post::orderBy('id', 'DESC')->paginate(20);

			return view('admin.post.index', compact('data'));
	}

	public function create() {
		return view('admin.post.create');
	}

	public function edit($id) {
		$data = Post::where('id', $id)->first();
		return view('admin.post.edit', compact('data'));
	}

	public function store(Request $request){
		$data = Post::add($request->all());
		$data->uploadImage($request->file('image_preview'), 'image_preview');
		$data->uploadImage($request->file('image_preview_inner'), 'image_preview_inner');
		$data->uploadImage($request->file('block_1_image'), 'block_1_image');
		$data->uploadImage($request->file('block_2_image'), 'block_2_image');
		$data->uploadImage($request->file('block_3_image'), 'block_3_image');
		$data->uploadImage($request->file('block_4_image'), 'block_4_image');
		return redirect()->route('post.index');
	}

	public function update(Request $request, $id){
		$data = Post::find($id);
		$data->edit($request->all());
		$data->uploadImage($request->file('image_preview'), 'image_preview');
		$data->uploadImage($request->file('image_preview_inner'), 'image_preview_inner');
		$data->uploadImage($request->file('block_1_image'), 'block_1_image');
		$data->uploadImage($request->file('block_2_image'), 'block_2_image');
		$data->uploadImage($request->file('block_3_image'), 'block_3_image');
		$data->uploadImage($request->file('block_4_image'), 'block_4_image');
		return redirect()->route('post.index');
	}

	public function destroy($id){
		$data = Post::find($id);
		$data->delete();
		return redirect()->back();
	}
}
