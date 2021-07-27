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
						<input type="text" name="product-name" class="add-product__input">
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Цена
						<input type="number" name="product-price" class="add-product__input">
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Характеристики
						<textarea name="characteristics" class="add-product__input"></textarea>
					</label>
				</div>

				<div class="col-md-6 col-12">
					<label class="add-product__label">
						Описание
						<textarea name="description" class="add-product__input"></textarea>
					</label>
				</div>

				<div class="col-12">
					<span class="add-product__text">Размеры:</span>
					<ul class="add-product__list">
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								XS
								<input type="checkbox" name="sizes[]" value="xs" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								S
								<input type="checkbox" name="sizes[]" value="s" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								M
								<input type="checkbox" name="sizes[]" value="m" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								XS
								<input type="checkbox" name="sizes[]" value="xs" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								S
								<input type="checkbox" name="sizes[]" value="s" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
						<li class="add-product__item">
							<label class="add-product__label add-product__label--row">
								M
								<input type="checkbox" name="sizes[]" value="m" class="add-product__input add-product__input-checkbox">
							</label>
						</li>
					</ul>
					<a href="../all-sizes.php" class="add-product__link">Редактировать</a>
				</div>

				<div class="col-lg-6 col-12">
					<label class="add-product__label">
						Добавление фото (Таблицы размеров)
						<input type="file" name="table-size-image" class="add-product__input">
					</label>
				</div>

				<div class="col-lg-6 col-12">
					<label class="add-product__label">
						Добавление фото (Вертикальной ориентации)
						<input type="file" multiple name="product_images[]" class="add-product__input">
					</label>
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
					categories1: 1,
					categories2: null,
				},
				categories1: [],
				categories2: [],
				categories3: [],
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
						this.sendData.categories3 = this.categories2[0]['id']
					}
				}
			},
			create() {
				axios.post('/admin/brand', this.sendData).then(response => {
					window.location.href = window.location.origin + '/admin/brand'
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
			}
		},
		async mounted() {
			await this.getBrands()
			await this.getMainCategories()
		}
	}
</script>
