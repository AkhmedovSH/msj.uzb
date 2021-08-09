<template>
<main>
	<section class="sizes categories">
		<div class="container-fluid">

			<div class="row">
				<div class="col-12">
					<h1 class="categories__title">Выберите раздел</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-2 col-lg-3 col-md-4 col-6 offset-xl-4 offset-lg-3 offset-md-2 offset-0">
					<a class="categories__link" :class="{'categories__link--active': activeTab == 1}" @click="setActiveTab(1)">Одежда</a>
				</div>
				<div class="col-xl-2 col-lg-3 col-md-4 col-6">
					<a class="categories__link" :class="{'categories__link--active': activeTab == 2}" @click="setActiveTab(2)">Обувь</a>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-4 col-6" v-for="(item, index) in data" :key="index">
					<div class="sizes__item">
						<span class="sizes__text">{{ item.name }}</span>
						<div class="sizes__form form" @click="deleteItem(item.id)">
							<button type="button" name="delete-size" class="sizes__delete-btn"></button>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-8 col-12 offset-lg-4 offset-md-3 offset-sm-2">
					<div class="sizes__form form add-size-form">
						<!-- clothes - Значение по умолчанию -->
						<input type="hidden" value="clothes" name="where-to-add">
						<button type="button" class="sizes__btn"  @click="redirect()">Добавить размер</button>
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
				dataCopy: [],
				activeTab: 1,
			};
    },
		methods: {
			setActiveTab(tabNumber) {
				this.data = []
				this.activeTab = tabNumber
				for (let i = 0; i < this.dataCopy.length; i++) {
					if(this.dataCopy[i]['size_category_id'] == tabNumber) {
						this.data.push(this.dataCopy[i])
					}
				}
			},
			redirect(id) {
				window.location.href = window.location.origin + '/admin/size/create/' + this.activeTab
			},
			deleteItem(id) {
				axios.delete('/admin/size/' + id).then(response => {
					this.getSizes()
				})
			},
			getSizes() {
				axios.get('/admin/get-sizes').then(response => {
					this.dataCopy = response.data
					this.setActiveTab(this.activeTab)
				})
			}
		},
		mounted() {
			this.getSizes()
		}
	}
</script>