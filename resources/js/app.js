/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.axios = require('axios');
window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('product-index', require('./components/ProductIndex.vue').default);
Vue.component('product-create', require('./components/ProductCreate.vue').default);
Vue.component('product-edit', require('./components/ProductEdit.vue').default);

Vue.component('category-index', require('./components/CategoryIndex.vue').default);
Vue.component('child-categories', require('./components/ChildCategories.vue').default);

Vue.component('brand-index', require('./components/BrandIndex.vue').default);
Vue.component('brand-create', require('./components/BrandCreate.vue').default);
Vue.component('brand-edit', require('./components/BrandEdit.vue').default);

Vue.component('size-index', require('./components/SizeIndex.vue').default);
Vue.component('size-create', require('./components/SizeCreate.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
