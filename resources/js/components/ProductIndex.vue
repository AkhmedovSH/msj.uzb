<template>
	<main>
		<section class="products">
			<div class="container-fluid">
	
				<div class="row">
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-1 offset-0">
						<a href="/admin/product/create" class="header__link">Добавить товар</a>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-6 offset-lg-4 offset-md-3 offset-0">
						<div class="products__form form">
							<button type="button" name="hide-products" class="products__btn hide-modal__btn" @click="hideProducts">Скрыть товары</button>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-4 col-12 mt-sm-0 mt-3">
						<div class="products__form form">
							<button type="button" name="delete-products" class="products__btn delete-modal__btn" @click="deleteSelected">Удалить</button>
						</div>
					</div>
				</div>

				<div class="row mt-5">
					<div class="col-lg-10 col-12 offset-lg-1">
						
						<div class="products__item" v-for="(item, index) in data" :key="index">
							<div class="products__form form">
								<input type="checkbox"  name="current-product" class="products__input products__input-checkbox"
								@change="selectProduct(item.id)"
								:checked="productIdList.includes(item.id)"
								>
							</div>
							<a href="javascript:void(0);" class="products__link">
								<span class="products__image">
									<img :src="'/uploads/products/' + item.image" alt="Product Image">
								</span>
								<span class="products__name">{{ item.name_ru }}</span>
							</a>
							<div class="products__actions actions">
								<!-- Класс для переключения состояния - visible / invisible -->
								<div class="actions__form visible">
									<button type="button" name="hide-product" class="actions__btn actions__btn--visible hide-modal__btn" @click="hideProduct(item.id)"></button>
									<span v-if="!item.hide" class="actions__text actions__text--visible">Скрыть с сайта</span>
									<span v-else class="actions__text actions__text--visible">Вернуть на сайт</span>
								</div>
								<div class="actions__form">
									<a :href="'/admin/product/edit/' + item.id" class="actions__btn actions__btn--edit"></a>
									<span class="actions__text">Ред-ть</span>
								</div>
								<div class="actions__form">
									<a :href="'/admin/product/destroy/' + item.id" class="actions__btn actions__btn--delete delete-modal__btn"></a>
									<a :href="'/admin/product/destroy/' + item.id" class="actions__text">Удалить</a>
								</div>
							</div>
						</div>
	
					</div>
				</div>

				<div class="VuePagination w-100 d-flex justify-content-center">
					<paginate
						:page-count="count"
						:initial-page="0"
						:page-range="3"
						:margin-pages="2"
						:click-handler="getCurrentPage"
						:prev-text="'<'"
						:next-text="'>'"
						:container-class="'pagination'"
						:page-class="'page-item'"
						:page-link-class="'page-link-item'"
						:prev-class="'prev-pagination'"
						:prev-link-class="'prev-link-pagination'"
						:next-class="'next-pagination'"
						:next-link-class="'next-link-pagination'"
					></paginate>
				</div>
	
			</div>
		</section>

		
	
	</main>
</template>

<script>
	import Paginate from "vuejs-paginate";
	export default {
		components: {
     'paginate': Paginate
		},
		data() {
			return {
				data: [],
				productIdList: [],
				count: 0,
				pagination: {
					page: 0,
					size: 20
				},
			};
    },
		methods: {
			redirect(id) {
				window.location.href = window.location.origin + '/admin/product/' + id + '/edit'
			},
			getProducts() {
				axios.get('/admin/get-products').then(response => {
					this.data = response.data.data
					this.count = response.data.total / this.pagination.size
				})
			},
			getCurrentPage(pageNumber) {
				axios.get('/admin/get-products?page=' + pageNumber).then(response => {
					this.data = response.data.data
					this.count = response.data.total / this.pagination.size
				});
			},
			hideProduct(id) {
				axios.post('/admin/product/hide/' + id).then(response => {
					this.getProducts()
				})
			},
			hideProducts() {
				axios.post('/admin/product/all/hide', {'list': this.productIdList}).then(response => {
					this.getProducts()
				})
			},
			deleteSelected() {
				axios.post('/admin/product/all/destroy', {'list': this.productIdList}).then(response => {
					this.getProducts()
				})
			},
			selectProduct(id) {
				if(this.productIdList.includes(id)) {
					const key = this.productIdList.indexOf(id);
					this.productIdList.splice(key, 1)
				} else {
					this.productIdList.push(id);
				}
			},
		},
		mounted() {
			this.getProducts()
		}
	}
</script>
