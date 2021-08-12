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
							Стоимость доставки по городу Ташкент - 25 000 сум
						</li>
						<li class="delivery__item">
							Доставка в регионы - 40 000 сум
						</li>
						<li class="delivery__item">
							Способы оплаты: Наличные, Click
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection