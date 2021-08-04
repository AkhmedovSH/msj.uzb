<template>
<main class="add-product">
	<section class="add-product__section">
		<div class="container-fluid">
			<form action="#!" method="#!" class="add-product__form row">

				<div class="col-lg-3 col-md-6 col-12">
					<select name="section" class="add-product__select" @change="selectCategory1()" v-model="sendData.categories1">
						<option :value="item.id" v-for="(item, index) in categories1" :key="index">{{ item.name }}</option>
					</select>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<select name="category" class="add-product__select" @change="selectCategory2()" v-model="sendData.categories2">
						<option :value="item.id" v-for="(item, index) in categories2" :key="index">{{ item.name }}</option>
					</select>
				</div>
				<!-- Подкатегория менятся в зависимости от выбора категории. При добавлении новых категорий value должны совпадать с data-target -->
				<div class="col-lg-3 col-md-6 col-12">
					<select name="category" class="add-product__select" @change="selectCategory2()" v-model="sendData.category_id">
						<option :value="item.id" v-for="(item, index) in categories3" :key="index">{{ item.name }}</option>
					</select>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<select name="category" class="add-product__select" v-model="sendData.brand_id">
						<option :value="item.id" v-for="(item, index) in brands" :key="index">{{ item.name }}</option>
					</select>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Название товара
						<input type="text" name="product-name" class="add-product__input" v-model="sendData.name">
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Цена
						<input type="number" name="product-price" class="add-product__input" v-model="sendData.price">
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Характеристики
						<textarea name="characteristics" class="add-product__input" v-model="sendData.characteristics"></textarea>
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Описание
						<textarea name="description" class="add-product__input" v-model="sendData.description"></textarea>
					</label>
				</div>

				<div class="col-6">
					<span class="add-product__text">Размеры Одежды:</span>
					<ul class="add-product__list">
						<li class="add-product__item" v-for="(item, index) in sizes1" :key="index">
							<label class="add-product__label add-product__label--row">
								{{ item.name }}
								<input type="checkbox" class="add-product__input add-product__input-checkbox" :checked="false" :value="item.name" v-model="sendData.sizes">
							</label>
						</li>
					</ul>
					<a href="/admin/size" class="add-product__link">Редактировать</a>
				</div>
				
				<div class="col-6">
					<span class="add-product__text">Размеры Обуви:</span>
					<ul class="add-product__list">
						<li class="add-product__item" v-for="(item, index) in sizes2" :key="index">
							<label class="add-product__label add-product__label--row">
								{{ item.name }}
								<input type="checkbox" class="add-product__input add-product__input-checkbox" :value="item.name" v-model="sendData.sizes">
							</label>
						</li>
					</ul>
					<a href="/admin/size" class="add-product__link">Редактировать</a>
				</div>

				<!-- <div class="col-lg-6 col-12">
					<label class="add-product__label">
						Добавление фото (Таблицы размеров)
						<input type="file" name="table-size-image" class="add-product__input">
					</label>
				</div> -->

				<div class="col-lg-6 col-12">
					<label class="add-product__label">
						Добавление фото (Главная)
						<input type="file" class="add-product__input" ref="file">
					</label>
				</div>

				<div class="col-lg-6 col-12">
					<label class="add-product__label">
						Добавление фото (Вертикальной ориентации)
						<input type="file" multiple class="add-product__input" ref="files">
					</label>
				</div>

				<div class="col-xl-4 col-md-6 col-12 offset-xl-4 offset-md-3 offset-0" style="text-align:center; cursor: pointer;">
					<a class="add-product__link" @click="create()">Опубликовать</a>
				</div>

			</form>

			
		</div>
	</section>
</main>
</template>

<script>
	export default {
		data() {
			return {
				data: [],
				brands: [],
				brandsCopy: [],
				sendData: {
					name: '',
					price: '',
					description: '',
					characteristics: '',
					brand_id: '',
					category_id: '',
					image: '',
					categories1: 1,
					categories2: null,
					sizes: [],
				},
				categories1: [],
				categories2: [],
				categories3: [],
				sizes1: [],
				sizes2: [],
			};
    },
		methods: {
			selectCategory1() {
				this.brands = []
				for (let i = 0; i < this.categories1.length; i++) {
					if(this.categories1[i]['id'] == this.sendData.categories1) {
						this.categories2 = this.categories1[i]['childs']
						this.sendData.categories2 = this.categories2[0]['id']

						this.categories3 = this.categories1[i]['childs'][0]['childs']
						this.sendData.category_id = this.categories1[i]['childs'][0]['childs'][0]['id']
					}
				}

				for (let i = 0; i < this.brandsCopy.length; i++) {
					if(this.categories1[i]['id'] == this.brandsCopy[i]['category_id']) {
						this.brands.push(this.brandsCopy[i])
					}
				}
				this.sendData.brand_id = this.brands[0]['category_id']
			},
			selectCategory2() {
				for (let i = 0; i < this.categories2.length; i++) {
					if(this.categories2[i]['id'] == this.sendData.categories2) {
						this.categories3 = this.categories2[i]['childs']
						this.sendData.category_id = this.categories2[0]['id']
					}
				}
			},
			create() {
				let formData = new FormData();
				for (let i = 0; i < this.$refs.files.files.length; i++) {
					formData.append('images[]', this.$refs.files.files[i])
				}

				if(this.$refs.file.files.length) {
					formData.append('image', this.$refs.file.files[0])
				}
				console.log(this.sendData.sizes);
				formData.append('name', this.sendData.name)
				formData.append('price', this.sendData.price)
				formData.append('description', this.sendData.description)
				formData.append('characteristics', this.sendData.characteristics)
				formData.append('brand_id', this.sendData.brand_id)
				formData.append('sizes', this.sendData.sizes)
				formData.append('category_id', this.sendData.category_id)

				axios.post('/admin/product', formData, {
					headers: {"Content-Type": "multipart/form-data","Accept": "application/json"},
				}).then(response => {
					window.location.href = window.location.origin + '/admin/product'
				})
			},
			getMainCategories() {
				axios.get('/admin/get-main-categories').then(response => {
					this.categories1 = response.data
					this.selectCategory1()
				})
			},
			getBrands() {
				axios.get('/admin/get-brands').then(response => {
					this.brandsCopy = response.data
				})
			},
			getSizes() {
				axios.get('/admin/get-sizes').then(response => {
					for (let i = 0; i < response.data.length; i++) {
						if(response.data[i]['size_category_id'] == 1) {
							this.sizes1.push(response.data[i])
						} else {
							this.sizes2.push(response.data[i])
						}
					}
				})
			},
		},
		async mounted() {
			await this.getBrands()
			await this.getSizes()
			await this.getMainCategories()

		}
	}
</script>
