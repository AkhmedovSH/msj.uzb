<template>
<main>
	<section class="categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0 d-flex align-items-center">
					<h1 class="categories__title categories__title--left">{{ category.name }}</h1>
					<div class="subcategories__form categories__form form">
						<button type="button" class="categories__btn">Добавить подкатегорию</button>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0">
					<div class="categories__item" v-for="(item, index) in categories" :key="index">
						<span class="categories__name">{{ item.name }}</span>
						<div class="categories__actions actions subcategories__actions">
							<form action="#!" method="#!" class="categories__form form">
								<button type="submit" class="actions__btn actions__btn--delete"></button>
							</form>
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--edit"></button>
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
		props: ['id', 'category'],
		data() {
			return {
				categories: []
			};
    },
		methods: {
			redirect() {
				window.location.href = window.location.origin + '/admin/category/create/' + this.activeTab
			},
			getChildCategories() {
				axios.get('/admin/get-child-categories/' + this.id).then(response => {
					this.categories = response.data
				})
			}
		},
		mounted() {
			this.getChildCategories()
		}
	}
</script>
