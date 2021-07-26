<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id'];

		public function childs() {
			return $this->hasMany(self::class, 'parent_id', 'id');
    }

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
    }
}
