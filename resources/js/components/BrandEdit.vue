<template>
<main>
	<section class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-4 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Добавить бренд</h1>
					<form class="categories__form form" autocomplete="off">
						<input type="text" placeholder="Введите название" name="brand-name" class="categories__input" v-model="sendData.name" required>
						<select name="brand-section" class="brands__input" placeholder="Выберите раздел" v-model="sendData.category_id">
							<option :value="item.id" v-for="(item, index) in data" :key="index">{{ item.name }}</option>
						</select>
						<div class="categories__btn-wrapper">
							<button type="button" class="categories__btn" @click="edit()" >Сохранить</button>
							<a href="/admin/brand" class="categories__btn">Отмена</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
</template>

<script>
	export default {
		props: ['brand'],
		data() {
			return {
				data: [],
				sendData: {},
			};
    },
		methods: {
			edit() {
				axios.put('/admin/brand/' + this.brand.id, this.sendData).then(response => {
					window.location.href = window.location.origin + '/admin/brand'
				})
			},
			getMainCategories() {
				axios.get('/admin/get-main-categories').then(response => {
					this.data = response.data
				})
			},
		},
		mounted() {
			this.getMainCategories()
			this.sendData = this.brand
		}
	}
</script>
