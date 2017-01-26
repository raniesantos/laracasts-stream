import VueRouter from 'vue-router';

let routes = [
	{
		path: '/about',
		component: require('./views/About')
	},
	{
		path: '/contact',
		component: require('./views/Contact')
	},
	{
		path: '/',
		component: require('./views/Home')
	}
];

export default new VueRouter({
	routes,
	linkActiveClass: 'is-active'
});