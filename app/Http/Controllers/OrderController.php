<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
	public $token = "1195077988:AAGYUpfLUgHDNIBjWXNH8dYCCc2XSXizq7k";
	public $chat_id = "-578429929";

	public function index()
	{
		return view('front.order');
	}

	public function payment(Request $request) {
		dd($request->all());
		$arr = [];
		foreach (Cart::content() as $key => $value) {
				array_push($arr, $value->id);            
		}
		$order = Order::add($request->all(), $arr);
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

				$url = 'https://my.click.uz/services/pay?service_id='
				. $request->service_id . '&merchant_id=' . $request->merchant_id . 
				'&amount=' . $request->amount . '&transaction_param=' . $request->phone . '&return_url=http://shatura.uz/payment-success/' . $request->phone;

				return redirect($url);
		}
		
		if($request->payment_type == 'payme') {
			
			$user = User::where('name', $request->phone)->first();
			if($user == null) {
				$new_user = User::create([
					'name' => $request->phone,
				]);
				$new_user->save();
			} else {
				$new_user = User::where('name', $request->phone)->first();
			}
			
			$url = 'https://checkout.paycom.uz/' . base64_encode('m=5f7599ce2a1efb16263bff66;ac.user_id=' . $new_user->id .';a=' . $request->amount * 100 . ';c=http://shatura.uz/payment-success/' . $request->phone);
			return redirect($url);
		}

		if($request->payment_type == 'cash') {
				$order = Order::where('phone', $request->phone)->first();
				$orders = Product::whereIn('id', json_decode($order->product_ids))->get();

				$order->status = 1;
				$order->save();
				$date = Carbon::now();
				$formatedDate = $date->format('d-m-Y H:i');

				$arr = [
					'Новая заявка с сайта: ' => 'msj.uz',
					'Имя: ' => $name,
					'Телефон: ' => $phone,
					'Город: ' => $city,
					'Адрес: ' => $address,
					'Способ оплаты: ' => $payment_type,
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
				$ch = curl_init($website . '/sendMessage');
				curl_setopt($ch, CURLOPT_HEADER, false);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				$result = curl_exec($ch);
				curl_close($ch);
				$weRecallText = 'Спасибо за покупку! Наши менеджеры свяжутся с вами.';
				return view('paymentSuccess', compact('weRecallText'));
		}
	}
}
