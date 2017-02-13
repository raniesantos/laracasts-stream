<template>
	<div class="message">
		<div class="message-header">
			Push to the Stream...
		</div>

		<div class="message-body">
			<form @submit.prevent="onSubmit">
				<p class="control">
					<textarea class="textarea" placeholder="I have something to say..." v-model="form.body"></textarea>
				</p>

				<p class="control">
					<button class="button is-primary">Submit</button>
				</p>
			</form>
		</div>
	</div>
</template>

<script>
	export default {
		data() {
			return {
				form: new Form({ body: '' })
			};
		},
		methods: {
			onSubmit() {
				this.form.post('http://localhost/laravel/vue2-laracasts-spa/public/statuses').then(status => alert('All done!'));
			}
		}
	}
</script>