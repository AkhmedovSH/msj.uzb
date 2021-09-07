<template>
<main>
	<section class="categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0 d-flex align-items-center">
					<h1 class="categories__title categories__title--left">{{ category.name_ru }}</h1>
					<div class="subcategories__form categories__form form">
						<a :href="'/admin/category/child/create/' + id" class="categories__btn">Добавить подкатегорию</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-8 col-lg-10 col-12 offset-xl-2 offset-lg-1 offset-0">
					<div class="categories__item" v-for="(item, index) in categories" :key="index">
						<span class="categories__name">{{ item.name_ru }}</span>
						<div class="categories__actions actions subcategories__actions">
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--delete" @click="deleteCategory(item.id)"></button>
							</div>
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--edit" @click="redirectEdit(item.id)"></button>
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
			redirectEdit(id) {
				window.location.href = window.location.origin + '/admin/category/edit/' + id
			},
			getChildCategories() {
				axios.get('/admin/get-child-categories/' + this.id).then(response => {
					this.categories = response.data
				})
			},
			deleteCategory(id) {
				axios.delete('/admin/category/' + id).then(response => {
					this.getChildCategories()
				})
			},
		},
		mounted() {
			this.getChildCategories()
		}
	}
</script>
