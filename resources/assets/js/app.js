
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import VueRouter from 'vue-router';
Vue.use(VueRouter)
// var VueMaterial = require('vue-material');
// Vue.use(VueMaterial);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */
Vue.component('blog-header', require('./components/BlogHeader.vue'));
Vue.component('blog-lists', require('./components/BlogLists.vue'));
Vue.component('blog-article', require('./components/BlogArticle.vue'));
Vue.component('blog', require('./components/Blog.vue'));
import App from './components/App.vue'
import Example from './components/Example.vue'
import Blog from './components/Blog.vue'
import Article from './components/BlogArticle.vue'



const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes: [
        { path: '/', component: Blog },
        { path: '/article', component: Article }
    ]
})

new Vue(Vue.util.extend({ router }, App)).$mount('#app')
