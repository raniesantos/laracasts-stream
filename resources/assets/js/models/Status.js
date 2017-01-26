class Status {
	static all(then) {
		return axios.get('http://localhost/laravel/vue2-laracasts-spa/public/statuses')
			.then(({data}) => then(data));
	}
}

export default Status;
