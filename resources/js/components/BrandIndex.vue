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
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--edit" @click="redirect(item.id)"></button>
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