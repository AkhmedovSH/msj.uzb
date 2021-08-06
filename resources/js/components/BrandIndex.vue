<template>
<main>
	<section class="brands categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0 d-flex align-items-center">
					<h1 class="categories__title categories__title--left">Все бренды</h1>
					<div class="subcategories__form categories__form form">
						<a href="/admin/brand/create" class="categories__btn">Добавить бренд</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0">
					<div class="categories__item" v-for="(item, index) in data" :key="index">
						<span class="categories__name">{{ item.name }}</span>
						<div class="categories__actions actions subcategories__actions">
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--delete" @click="deleteItem(item.id)"></button>
							</div>
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--edit" @click="redirect(item.id)"></button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="modal delete-modal">
				<div class="container-fluid">
					<div class="modal__overlay">
						<div class="row">
							<div class="col-xl-6 col-lg-8 col-sm-10 col-12 offset-xl-3 offset-lg-2 offset-sm-1 offset-0">
								<div class="modal__body">
									<h1 class="modal__title">Вы точно хотите удалить?</h1>
									<form action="#!" method="#!" class="modal__form">
										<a href="#!" class="modal__link">Нет</a>
										<button type="submit" name="delete-product" class="modal__btn">Да</button>
									</form>
								</div>
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
				window.location.href = window.location.origin + '/admin/brand/' + id + '/edit'
			},
			deleteItem(id) {
				window.location.href = window.location.origin + '/admin/brand/destroy/' + id
			},
			getBrands() {
				axios.get('/admin/get-brands').then(response => {
					this.data = response.data
				})
			}
		},
		mounted() {
			this.getBrands()
		}
	}
</script>