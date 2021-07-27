<template>
<main>
	<section class="categories">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-8 col-12 offset-xl-4 offset-lg-3 offset-md-2 offset-0">
					<h1 class="categories__title">Добавить размер</h1>
					<div class="categories__form form">
						<input type="text" placeholder="Введите размер" name="category-name" class="categories__input" v-model="sendData.name" required>
						<div class="categories__btn-wrapper">
							<button type="button" name="save-category" class="categories__btn" @click="create()">Сохранить</button>
							<a href="/admin/size" class="categories__btn">Отмена</a>
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
		props: ['id'],
		data() {
			return {
				sendData: {
					name: '',
					size_category_id: this.id,
				}
			};
    },
		methods: {
			create() {
				axios.put('/admin/size/store/' + this.id, this.sendData).then(response => {
						window.location.href = window.location.origin + '/admin/size'
				})
			},
		},
		mounted() {
		}
	}
</script>