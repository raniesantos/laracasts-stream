import Vue from 'vue';
import VueRouter from 'vue-router';
import axios from 'axios';
import Form from 'form-backend-validation';

window.Vue = Vue;
Vue.use(VueRouter);

window.axios = axios;
window.axios.defaults.headers.common = {
	'X-Requested-With': 'XMLHttpRequest'
};

window.Form = Form;

window.App = {
	index: document.querySelector('meta[name="app-url"]').content,
	url(route) {
		return this.index + route;
	}
};