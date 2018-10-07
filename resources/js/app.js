/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


import BootstrapVue from 'bootstrap-vue'
import Vue from 'vue';
import Axios from 'axios'
import VueRouter from 'vue-router';
Vue.use(VueRouter);
Vue.use(BootstrapVue);
// Vue.use(Axios)


// Imported components
import master from './components/master.vue';
import adduser from './components/AddUser.vue';
import listuser from './components/listuser.vue';
// Route
const routes = [
  { name: 'adduser', path: '/AddUser', component: adduser },
  { name: 'master', path: '/', component: master },
  { name: 'listuser', path: '/ListUser', component: listuser }
];
// Setup Vue Router
const router = new VueRouter({ 
  mode: 'history', 
  routes: routes,
});
new Vue(Vue.util.extend({ router }, master)).$mount('#app');