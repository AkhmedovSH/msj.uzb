<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

		protected $fillable = ['title_ru', 'title_uz', 'subtitle_ru', 'subtitle_uz', 'description_ru', 'description_uz',];

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

		public function removeImage(){
			if ($this->image != null) {
					unlink('uploads/posts/'. $this->image);
			}
		}

		function uploadImage($image){
				if ($image == null) { return; }
				$this->removeImage();
				$filename = rand(1000, 1000000000). '.' . $image->extension();

				$image->move('uploads/posts/', $filename);
				$this->image = $filename;
				$this->save();
		}
}
