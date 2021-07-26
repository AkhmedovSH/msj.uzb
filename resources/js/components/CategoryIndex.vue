<template>
<main>
	<section class="categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<h1 class="categories__title">Выберите раздел</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2 col-md-3 col-6 offset-lg-2 offset-0">
					<a class="categories__link" :class="{'categories__link--active': activeTab == 1}" @click="setActiveTab(1)">Для женщин</a>
				</div>
				<div class="col-lg-2 col-md-3 col-6">
					<a class="categories__link" :class="{'categories__link--active': activeTab == 2}" @click="setActiveTab(2)">Для мужчин</a>
				</div>
				<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
					<a class="categories__link" :class="{'categories__link--active': activeTab == 3}" @click="setActiveTab(3)">Для девочек</a>
				</div>
				<div class="col-lg-2 col-md-3 col-6 mt-md-0 mt-3">
					<a class="categories__link" :class="{'categories__link--active': activeTab == 4}" @click="setActiveTab(4)">Для мальчиков</a>
				</div>
			</div>

			<div class="row mt-5 tab__content tab__content--active">
				<div class="col-lg-8 col-12 offset-lg-2 offset-0">
					<div class="categories__item" v-for="(item, index) in childs" :key="index">
						<span class="categories__name">{{ item.name }}</span>
						<div class="actions__form form">
							<a :href="'subcategory/' + item.id" class="actions__btn actions__btn--secondary">Посмотреть категорию</a>
						</div>
						<div class="categories__actions actions">
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--delete" @click="deleteCategory(item.id)"></button>
							</div>
							<div class="categories__form form">
								<button type="button" class="actions__btn actions__btn--edit" @click="redirectEdit(item.id)"></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12 offset-md-4 offset-sm-3 offset-0">
					<button type="button" class="categories__btn" @click="redirect()">Добавить категорию</button>
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
				activeTab: 1,
				mainCategories: [],
				childs: [],
			};
    },
		methods: {
			setActiveTab(tabNumber) {
				this.activeTab = tabNumber
				for (let i = 0; i < this.mainCategories.length; i++) {
					if(this.mainCategories[i]['id'] == tabNumber) {
						this.childs = this.mainCategories[i]['childs']
					}
				}
			},
			redirect() {
				window.location.href = window.location.origin + '/admin/category/create/' + this.activeTab
			},
			redirectEdit() {
				window.location.href = window.location.origin + '/admin/category/create/' + this.activeTab
			},
			deleteCategory(id) {
				axios.delete('category/' + id).then(response => {
					this.getMainCategories()
				})
			},
			getMainCategories() {
				axios.get('get-main-categories').then(response => {
					this.mainCategories = response.data
					this.childs = this.mainCategories[0]['childs']
				})
			}
		},
		mounted() {
			this.getMainCategories()
		}
	}
</script>
