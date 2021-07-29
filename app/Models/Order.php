<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
		protected $fillable = ['phone', 'payment_type', 'name', 'address'];
    public static function add($fields, $product_ids)
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
