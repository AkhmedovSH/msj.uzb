<template>
	<main>
		<section class="products">
			<div class="container-fluid">
	
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-1 offset-0">
						<a href="/admin/product/create" class="header__link">Добавить товар</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-4 offset-md-3 offset-0">
						<form action="#!" method="#!" class="products__form form">
							<button type="submit" name="hide-products" class="products__btn hide-modal__btn">Скрыть товары</button>
						</form>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-0 mt-3">
						<form action="#!" method="#!" class="products__form form">
							<button type="submit" name="delete-products" class="products__btn delete-modal__btn">Удалить</button>
						</form>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-lg-10 col-12 offset-lg-1">
						
						<div class="products__item" v-for="(item, index) in data" :key="index">
							<form action="#!" method="#!" class="products__form form">
								<input type="checkbox" checked name="current-product" class="products__input products__input-checkbox">
							</form>
							<a href="javascript:void(0);" class="products__link">
								<span class="products__image">
									<img :src="'/uploads/products/' + item.image" alt="Product Image">
								</span>
								<span class="products__name">{{ item.name }}</span>
							</a>
							<div class="products__actions actions">
								<!-- Класс для переключения состояния - visible / invisible -->
								<form action="#!" method="#!" class="actions__form visible">
									<button type="submit" name="hide-product" class="actions__btn actions__btn--visible hide-modal__btn"></button>
									<span class="actions__text actions__text--visible">Скрыть с сайта</span>
									<span class="actions__text actions__text--invisible">Вернуть на сайт</span>
								</form>
								<div class="actions__form">
									<a :href="'/admin/product/edit/' + item.id" class="actions__btn actions__btn--edit"></a>
									<span class="actions__text">Ред-ть</span>
								</div>
								<div class="actions__form">
									<a :href="'/admin/product/destroy/' + item.id" class="actions__btn actions__btn--delete delete-modal__btn"></a>
									<a :href="'/admin/product/destroy/' + item.id" class="actions__text">Удалить</a>
								</div>
							</div>
						</div>
	
					</div>
				</div>
	
			</div>
		</section>
	
	</main>
</template>

<script>
	export default {
		data() {
			return {
				data: [],
			};
    },
		methods: {
			redirect(id) {
				window.location.href = window.location.origin + '/admin/product/' + id + '/edit'
			},
			getProducts() {
				axios.get('/admin/get-products').then(response => {
					this.data = response.data.data
				})
			}
		},
		mounted() {
			this.getProducts()
		}
	}
</script>
