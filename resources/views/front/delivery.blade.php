@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/assets/styles/index.css?ver=2')}}" />

<main>
	<section class="delivery">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 offset-lg-1 col-12">
					<h3 class="delivery__title">Доставка</h3>
					<ul class="delivery__list">
						<li class="delivery__item">
							Стоимость доставки по городу Ташкент - 25 000 сум <br>
							Доставка в регионы - 40 000 сум
						</li>
						<li class="delivery__item">
							Доставка в центральные города Узбекистана осуществляется курьерской службой в течение 1-4 дней. Стоимость доставки в города 25 000 до 1 кг, + 3 000 за каждые последующие 0,5 кг. стоимость доставки в регионы Узбекистана 40 000 до 1 кг, + 3 000 за каждые последующие 0,5 кг.
						</li>
						<li class="delivery__item">
							Способы оплаты: наличные, Payme, Click
						</li>
						<li class="delivery__item">
							Заказы, оформленные до обеда, доставляются в этот же день. Заказы, оформленные после обеда, доставляются на следующий день;
						</li>
						<li class="delivery__item">
							При возврате товара стоимость доставки 15 000 сум;
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection