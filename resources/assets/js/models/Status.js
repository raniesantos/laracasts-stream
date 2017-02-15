class Status {
	static all(then) {
		return axios.get(App.url('/statuses'))
			.then(({data}) => then(data));
	}
}

export default Status;
