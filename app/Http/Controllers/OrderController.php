<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
	public $token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k";
	public $chat_id = "-578429929";

	public function index()
	{
		return view('front.order');
	}

	public function payment(Request $request) {
		$order = Order::add($request->all());

		if($request->payment_type == 'click') {
				$user = User::where('name', $request->phone)->first();
				if($user == null) {
					$new_user = User::create([
						'name' => $request->phone,
					]);
					$new_user->save();
				} else {
					$new_user = User::where('name', $request->phone)->first();
				}

				$amount = 0;
				foreach (Cart::content() as $key => $value) {
					$amount += $value->model->price * $value->qty;
				}

				$url = 'https://my.click.uz/services/pay?service_id='
				. '18877' . '&merchant_id=' . '13469' . 
				'&amount=' . $amount . '&transaction_param=' . 512225 . '&return_url=http://shatura.uz/payment-success/' . $request->phone;

				return redirect($url);
		}

		if($request->payment_type == 'cash') {
				$order = Order::where('phone', preg_replace("/[^a-zA-Z1-9]+/", "", $request->phone))->first();

				$order->status = 1;
				$order->save();

				$arr = [
					'Новая заявка с сайта: ' => 'msj.uz',
					'Имя: ' => $request->name,
					'Телефон: ' => $request->phone,
					'Город: ' => $request->city,
					'Адрес: ' => $request->address,
					'Способ оплаты: ' => $request->payment_type,
				];
				$txt = "";
				foreach ($arr as $key => $value) {
					$txt .= "<b>" . $key . "</b> " . $value . "\n";
				};
				$totalAmount = 0;
				foreach (Cart::content() as $key => $value) {
					$totalAmount += $value->model->price * $value->qty;
					$txt .= "<b>" .  $value->name . "</b> "
					. number_format($value->model->price, 0,","," ") . ' сум | ' . $value->qty . ' шт' . "\n";
				}
				$txt .= "<b>" . "Общая сумма: " . "</b> " . number_format($totalAmount, 0,","," ") . " сум";
				
				$website="https://api.telegram.org/bot".$this->token;
				$chatId = $this->chat_id;
				$params=[
						'chat_id'=>$chatId, 
						'text'=> $txt,
						'parse_mode' => 'html'
				];
				// $ch = curl_init($website . '/sendMessage');
				// curl_setopt($ch, CURLOPT_HEADER, false);
				// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				// curl_setopt($ch, CURLOPT_POST, 1);
				// curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
				// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				// $result = curl_exec($ch);
				// curl_close($ch);
				return view('front.success');
		}
	}
}
