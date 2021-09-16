@extends('layout')
@section('content')

<link rel="stylesheet" href="{{ asset('/assets/styles/index.css?ver=6')}}" />

<main>
	<section class="offer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12 offset-0">
					<p class="offer__text">
						Интернет-магазин «название», расположенный на доменном имениwww.адрес, организационно-правовая форма,полное наименование организации, ИП,
					</p>
					<p class="offer__text">
						и юридическим адресом юридический адрес,
					</p>
					<p class="offer__text">
						в лице должность уполномоченного лица, ФИО,
					</p>
					<p class="offer__text">
						действующего (- ей) на основании указать документ, удостоверяющий полномочия и его реквизиты,
					</p>
					<p class="offer__text">
						именуемое в дальнейшем «Продавец», публикует Публичную оферту о продаже Товара дистанционным способом.
					</p>
					<ul class="offer__list">
						<li class="offer__item offer__item-title">
							1. ОПРЕДЕЛЕНИЕ ТЕРМИНОВ
						</li>
						<li class="offer__item">
							1.1 Публичная оферта (далее – «Оферта») - публичное предложение Продавца, адресованное неопределенному кругу лиц, заключить с Продавцом договор купли-продажи товара дистанционным способом (далее - «Договор») на условиях, содержащихся в настоящей Оферте, включая все Приложения.
						</li>
						<li class="offer__item">
							1.2. Заказ Товара на сайте Интернет-магазина – позиции указанные Покупателем из ассортимента Товара, предложенного к продаже, при оформлении заявки на приобретение Товара на сайте Интернет-магазина или через Оператора.
						</li>
						<li class="offer__item offer__item-title">
							2. ОБЩИЕ ПОЛОЖЕНИЯ
						</li>
						<li class="offer__item">
							2.1. Заказ Покупателем Товара, размещенного на сайте Интернет-магазина означает, что Покупатель согласен со всеми условиями настоящей Оферты.
						</li>
						<li class="offer__item">
							2.2. Администрация сайта Интернет-магазина имеет право вносить изменения в Оферту без уведомления Покупателя.
						</li>
						<li class="offer__item">
							2.3. Срок действия Оферты не ограничен, если иное не указано на сайте Интернет-магазина.
						</li>
						<li class="offer__item">
							2.4. Продавец предоставляет Покупателю полную и достоверную информацию о Товаре, включая информацию об основных потребительских свойствах Товара, месте изготовления, а также информацию о гарантийном сроке и сроке годности Товара на сайте Интернет магазина, в разделе название раздела.
						</li>
						<li class="offer__item offer__item-title">
							3. ЦЕНА ТОВАРА
						</li>
						<li class="offer__item">
							3.1. Цена на каждую позицию Товара указана на сайте Интернет-магазина.
						</li>
						<li class="offer__item">
							3.2. Продавец имеет право в одностороннем порядке изменить цену на любую позицию Товара.
						</li>
						<li class="offer__item">
							3.3. В случае изменения цены на заказанный Товар Продавец обязуется в течение количество дней проинформировать Покупателя об изменении цены Товара.
						</li>
						<li class="offer__item">
							3.4. Покупатель вправе подтвердить либо аннулировать Заказ на приобретение Товара, если цена изменена Продавцом после оформления Заказа.
						</li>
						<li class="offer__item">
							3.5. Изменение Продавцом цены на оплаченный Покупателем Товар не допускается.
						</li>
						<li class="offer__item">
							3.6. Продавец указывает стоимость доставки Товара на сайте Интернет-магазина либо сообщает Покупателю при оформлении заказа Оператором.
						</li>
						<li class="offer__item">
							3.7. Обязательства Покупателя по оплате Товара считаются исполненными с момента поступления Продавцом денежных средств.
						</li>
						<li class="offer__item">
							3.8. Расчеты между Продавцом и Покупателем за Товар производятся способами, указанными на сайте Интернет-магазина в разделеназвание раздела
						</li>
						<li class="offer__item offer__item-title">
							4. ОФОРМЛЕНИЕ ЗАКАЗА
						</li>
						<li class="offer__item">
							4.1. Заказ Товара осуществляется Покупателем через Оператора по телефону номер телефонаили через сервис сайта Интернет-магазина www. адрес раздела.
						</li>
						<li class="offer__item">
							4.2. При регистрации на сайте Интернет-магазина Покупатель обязуется предоставить следующую регистрационную информацию:
						</li>
						<li class="offer__item">
							4.2.1. фамилия, имя, отчество Покупателя или указанного им лица (получателя);
						</li>
						<li class="offer__item">
							4.2.2. адрес, по которому следует доставить Товар (если доставка до адреса Покупателя);
						</li>
						<li class="offer__item">
							4.2.3. адрес электронной почты;
						</li>
						<li class="offer__item">
							4.2.4. контактный телефон.
						</li>
						<li class="offer__item">
							4.3. Наименование, количество, ассортимент, артикул, цена выбранного Покупателем Товара указываются в корзине Покупателя на сайте Интернет-магазина.
						</li>
						<li class="offer__item">
							4.4. Если Продавцу необходима дополнительная информация, он вправе запросить ее у Покупателя. В случае не предоставления необходимой информации Покупателем, Продавец не несет ответственности за выбранный Покупателем Товар.
						</li>
						<li class="offer__item">
							4.5. При оформлении Заказа через Оператора (п. 4.1. настоящей Оферты) Покупатель обязуется предоставить информацию, указанную в п. 4.2. настоящей Оферты.
						</li>
						<li class="offer__item">
							4.6. Принятие Покупателем условий настоящей Оферты осуществляется посредством внесения Покупателем соответствующих данных в регистрационную форму на сайте Интернет-магазина или при оформлении Заказа через Оператора. После оформления Заказа через Оператора данные о Покупателе регистрируются в базе данных Продавца. Утвердив Заказ выбранного Товара, Покупатель предоставляет Оператору необходимую информацию в соответствии с порядком, указанном в п. 4.2. настоящей Оферты.
						</li>
						<li class="offer__item">
							4.7. Продавец не несет ответственности за содержание и достоверность информации, предоставленной Покупателем при оформлении Заказа.
						</li>
						<li class="offer__item">
							4.8. Покупатель несет ответственность за достоверность предоставленной информации при оформлении Заказа.
						</li>
						<li class="offer__item">
							4.9. Договор купли-продажи дистанционным способом между Продавцом и Покупателем считается заключенным с момента выдачи Продавцом Покупателю кассового или товарного чека либо иного документа, подтверждающего оплату Товара.
						</li>
						<li class="offer__item offer__item-title">
							ДОСТАВКА И ПЕРЕДАЧА ТОВАРА ПОКУПАТЕЛЮ
						</li>
						<li class="offer__item">
							5.1. Продавец оказывает Покупателю услуги по доставке Товара одним из способов указанных на сайте Интернет-магазина.
						</li>
						<li class="offer__item">
							5.2. Если Договор купли-продажи товара дистанционным способом (далее – Договор) заключен с условием о доставке Товара Покупателю, Продавец обязан в установленный Договором срок доставить Товар в место, указанное Покупателем, а если место доставки Товара Покупателем не указано, то по месту его жительства или регистрации.
						</li>
						<li class="offer__item">
							5.3. Место доставки Товара Покупатель указывает при оформлении Заказа на приобретение Товара.
						</li>
						<li class="offer__item">
							5.4. Срок доставки Товара Покупателю состоит из срока обработки заказа и срока доставки.
						</li>
						<li class="offer__item">
							5.5. Доставленный Товар передается Покупателю, а при отсутствии Покупателя - любому лицу, предъявившему квитанцию или иной документ, подтверждающий заключение Договора или оформление доставки Товара.
						</li>
						<li class="offer__item">
							5.6. В момент передачи Товара в обязательном порядке в письменной форме Покупателю сообщаются сведения, предусмотренные в Приложении № номер к Договору.
						</li>
						<li class="offer__item">
							5.7. Информация о Товаре доводится до сведения Покупателя в технической документации, прилагаемой к Товару, на этикетках, путем нанесения маркировки или иным способом, принятым для отдельных видов товаров.
						</li>
						<li class="offer__item">
							5.8. Сведения об обязательном подтверждении соответствия Товара представляются в порядке и способами, которые установлены законодательством Российской Федерации о техническом регулировании, и включают в себя сведения о номере документа, подтверждающего такое соответствие, о сроке его действия и об организации, его выдавшей.
						</li>
						<li class="offer__item offer__item-title">
							6. РЕКВИЗИТЫ ПРОДАВЦА
						</li>
						<li class="offer__item">
							Продавец:
						</li>
						<li class="offer__item">
							Название организации, ИП
						</li>
						<li class="offer__item">
							Телефон
						</li>
						<li class="offer__item">
							Адрес:
						</li>
						<li class="offer__item">
							Юридический адрес
						</li>
						<li class="offer__item">
							Банковские реквизиты
						</li>
						<li class="offer__item">
							К/с
						</li>
						<li class="offer__item">
							Бик:
						</li>
						<li class="offer__item offer__item--danger">
							Внимательно ознакомьтесь с текстом публичной оферты, и если Вы не согласны с каким-либо пунктом оферты, Вы вправе отказаться от покупки Товаров, предоставляемых Продавцом, и не совершать действий, указанный в п. 2.1. настоящей Оферты.
						</li>
						<li class="offer__item">
							Согласен с договором
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
</main>

@endsection