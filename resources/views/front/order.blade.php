@extends('layout')
@section('content')

<main>
	<section class="ordering">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 col-md-10 offset-md-1 col-12">
					<h2 class="ordering__title">Оформление заказа</h2>
					<form action="/payment" method="POST" class="ordering__form form" autocomplete="off">
						<div class="form__input-group">
							<input type="tel" name="phone" placeholder="+998" class="form__input form__input--mask" required>
							<input type="text" name="name" placeholder="Ваше имя" class="form__input" required>
						</div>

						<div class="form__input-group">
							<div class="form__select-group">
								<select class="form__select styler" name="city" onchange="selectCity()" id="city">
									<option value="" disabled>Выберите город</option>
									<option selected value="Ташкент">Ташкент</option>
									<option value="Самарканд">Самарканд</option>
									<option value="Бухара">Бухара</option>
								</select>
								<div class="form__select-info">
									<p class="form__select-text">
										Стоимость доставки: 
										<span id="delivery_price" class="delivery-price">25 000</span>
										<span class="delivery-price"> сум</span>
									</p>
									<p class="form__select-text">
										<input id="products_price" type="text" class="d-none" value="{{ Cart::subtotal(0, 0, '') }}">
										Стоимость товара: <span class="product-price">{{ Cart::subtotal(0, 0, ' ') }} сум</span>
									</p>
									<p class="form__select-text">
										Общая стоимость: 
										<span id="total_price" class="total-price">{{ Cart::subtotal(0, 0, ' ') }}</span>
										<span class="total-price"> сум</span>
									</p>
								</div>
							</div>
							<div class="form__radio-group">
								Выберите способ оплаты:
								<div class="form__label-group">
									<label class="form__label" style="margin-bottom: 0;">
										<input type="radio" name="payment_type" value="cash" class="form__radio styler" checked>
										Наличные
									</label>
									<label class="form__label">
										<input type="radio" name="payment_type" value="click" class="form__radio styler">
										<img src="/assets/icons/click-logo.svg" alt="Click Logo">
									</label>
									<!-- <label class="form__label">
										<input type="radio" name="payment_type" value="payme" class="form__radio styler">
										<img src="/assets/icons/payme-logo.svg" alt="Payme Logo">
									</label> -->
								</div>
							</div>
						</div>

						<div class="form__input-group">
							<input type="text" name="address" placeholder="Адрес доставки" class="form__input form__input--wide">
						</div>
						@csrf
						<button type="submit" class="form__btn">Оформить</button>

					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<script>
	var city = document.getElementById("city").value;
	var price = document.getElementById("products_price").value;
	price = Number(price) + 25000
	document.getElementById("total_price").innerHTML = formatMoney(price)

	function selectCity() {
		var city = document.getElementById("city").value;
		var price = document.getElementById("products_price").value;
		switch (city) {
			case 'Самарканд':
				document.getElementById("delivery_price").innerHTML = '40 000'
				price = Number(price) + 40000
				document.getElementById("total_price").innerHTML = formatMoney(price)
				break;
			case 'Бухара':
				document.getElementById("delivery_price").innerHTML = '40 000'
				price = Number(price) + 40000
				document.getElementById("total_price").innerHTML = formatMoney(price)
				break;
			case 'Ташкент':
				document.getElementById("delivery_price").innerHTML = '25 000'
				price = Number(price) + 25000
				document.getElementById("total_price").innerHTML = formatMoney(price)
				break;
		}
	}

	function formatMoney(amount, decimalCount = 0, decimal = ".", thousands = " ") {
		try {
			decimalCount = Math.abs(decimalCount);
			decimalCount = isNaN(decimalCount) ? 0 : decimalCount; // 0 was 2
	
			const negativeSign = amount < 0 ? "-" : "";
	
			let i = parseInt(amount = Math.abs(Number(amount) || 0).toFixed(decimalCount)).toString();
			let j = (i.length > 3) ? i.length % 3 : 0;
	
			return negativeSign + (j ? i.substr(0, j) + thousands : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + thousands) + (decimalCount ? decimal + Math.abs(amount - i).toFixed(decimalCount).slice(2) : "");
		} catch (e) {
			console.log(e)
		}
	}
</script>
@endsection