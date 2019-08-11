//
// require('./bootstrap');
//
// window.Vue = require('vue');
//
// window.VueRouter = require('vue-router').default;
//
// window.VueAxios = require('vue-axios').default;
//
// window.Axios = require('axios').default;
//
// let AppLayout = require('./components/App.vue');
//
// const Home = Vue.component('Home', require('./components/home.vue'));
//
// const Allposts = Vue.component('AllPosts', require('./components/AllPosts.vue'));
// const Createpost = Vue.component('CreatePost', require('./components/CreatePost.vue'));
// const Editpost = Vue.component('EditPost', require('./components/EditPost.vue'));
// const Viewpost = Vue.component('ViewPost', require('./components/ViewPost.vue'));
// // const Deletepost = Vue.component('DeletePost', require('./components/DeletePost.vue'));
//
// //register Modules
// Vue.use(VueRouter, VueAxios, axios);
//
// const routes = [
//     {
//         name: 'Home',
//         path: '/',
//         component: Home
//     },
//     {
//         name: 'AllPosts',
//         path: '/all',
//         component: Allposts
//     },
//     {
//         name: 'CreatePost',
//         path: '/create-post',
//         component: Createpost
//     },
//     {
//         name: 'EditPost',
//         path: '/edit/:id',
//         component: Editpost
//     },
//     {
//         name: 'ViewPost',
//         path: '/view-post/:id',
//         component: Viewpost
//     },
//     // {
//     //     name: 'DeletePost',
//     //     path: '/delete/:id',
//     //     component: Deletepost
//     // }
// ]
//
//
// const router = new VueRouter({ mode: 'history', routes: routes});
//
// new Vue(
//     Vue.util.extend(
//         { router },
//         AppLayout
//     )
// ).$mount('#app');

// window.axios = require("axios");
//
// import Vue from "vue";
// import router from "./router";
//
// const app = new Vue({
//     el: "#app",
//     router,
//     render: h => h(App)
// });
//
// export default app;


import Vue from 'vue'
import VueRouter from 'vue-router';
import Home from './components/Home.vue';

import { routes } from './routes';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes
});

new Vue({
    el: '#app',
    router
});