<?php

namespace App\Models;

use App\Models\OrderProducts;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

		protected $fillable = ['phone', 'status', 'name', 'payment_type', 'city', 'address', 'total_amount'];

		public function order_products() {
			return $this->hasMany(Product::class, 'id', 'product_id');
    }

    public static function add($fields)
    {
        $data = new static;
        $data->fill($fields);
				$data->phone = preg_replace("/[^a-zA-Z1-9]+/", "", $fields['phone']);
        $data->save();
				foreach (Cart::content() as $key => $value) {
					$order_products = new OrderProducts();
					$order_products->order_id = $data->id;
					$order_products->product_id = $value->model->id;
					$order_products->quantity = $value->qty;
					$order_products->size = $value->options['size'];
					$order_products->save();
				}

        return $data;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }
}
