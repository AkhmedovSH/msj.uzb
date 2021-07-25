<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Slider extends Model
{
    protected $table = 'slider';
    protected $guarded = [];


    public static function add($fields){
        $slider = new static;
        $slider->fill($fields);
        $slider->save();
        return $slider;
    }

    public function edit($fields){
        $this->fill($fields);
        $this->save();
    }

    public function remove(){
        $this->removeImage();
        $this->delete();
    }
    
    public function removeImage(){
        if ($this->image != null){
            Storage::delete('uploads/slider/'. $this->image);
        }
    }

    function uploadImage($image){
        if ($image == null) { return; }
        $this->removeImage();
        $filename = rand(1000, 1000000000). '.' . $image->extension();

        $image->move('uploads/slider/', $filename);
        $this->image = $filename;
        $this->save();
    }


    public function getImage(){
        if ($this->image == null){
            return '/img/no-image.png';
        }
        return '/uploads/slider/'. $this->image;
    }

}