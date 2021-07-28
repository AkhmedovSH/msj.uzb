<?php

namespace App\Models;

use App\Credit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{

    protected $fillable = [
        'name', 'category_id', 'price', 'characteristics', 'description', 'brand_id' , 'sizes'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public static function add($fields){
        $data = new static;
        $data->fill($fields);
        $data->save();
        return $data;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function remove() {
       
        $this->removeImage();
        $this->delete();
    }

    public function getImage() {
        if ($this->image == null){
            return '/img/no-image.png';
        }
        return '/uploads/products/'. $this->image;
    }

    public function removeImage(){
        if ($this->image != null) {
            unlink('uploads/products/'. $this->image);
        }
    }

    function uploadImage($image){
        if ($image == null) { return; }
        $this->removeImage();
        $filename = rand(1000, 1000000000). '.' . $image->extension();

        $image->move('uploads/products/', $filename);
        $this->image = $filename;
        $this->save();
    }
    
    public function uploadMultipleImages($images) {
        if ($images == null) { return; }
        $names = array();
        $incI = 0;
        foreach($images as $image)
        {
            $filename = rand(1000, 1000000000). '.' . $image->extension();
            $image->move('uploads/products/', $filename);
            $names[$incI]['image'] = $filename;
            $incI++;
        }
        $this->images = json_encode($names);
        $this->save();
    }

}
