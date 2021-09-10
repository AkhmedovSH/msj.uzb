<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

		protected $fillable = [
			'title_ru', 'title_uz', 'mini_description_ru', 'mini_description_uz', 'image_preview', 'image_preview_inner',
			'block_1_subtitle_ru', 'block_1_subtitle_uz', 'block_1_description_ru', 'block_1_description_uz',
			'block_2_subtitle_ru', 'block_2_subtitle_uz', 'block_2_description_ru', 'block_2_description_uz',
			'block_3_subtitle_ru', 'block_3_subtitle_uz', 'block_3_description_ru', 'block_3_description_uz',
			'block_4_subtitle_ru', 'block_4_subtitle_uz', 'block_4_description_ru', 'block_4_description_uz',
		];

		public static function add($fields)
    {
        $data = new static;
        $data->fill($fields);
        $data->save();

        return $data;
    }

    public function edit($fields)
    {
			$this->fill($fields);
			$this->save();
			return $this;
    }

		public function removeImage($db_name) {
			if ($this[$db_name] != null) {
				unlink('uploads/course/images/'. $this[$db_name]);
			}
		}

		function uploadImage($image, $db_name){
				if ($image == null) { return; }
				//$this->removeImage($db_name);
				$filename = rand(1000, 1000000000) . '.' . $image->extension();

				$image->move('uploads/posts/', $filename);
				$this[$db_name] = $filename;
				$this->save();
		}
}
