<template>
	<div class="message">
		<div class="message-header">
			Write a Status
		</div>

		<div class="message-body">
			<form @submit.prevent="onSubmit" @keydown="form.errors.clear()">
				<p class="control">
					<textarea class="textarea" placeholder="What's on your mind?" v-model="form.body"></textarea>
					<span class="help is-danger" v-if="form.errors.has('body')" v-text="form.errors.get('body')"></span>
				</p>

				<p class="control is-clearfix">
					<button class="button is-primary is-pulled-right" :disabled="form.errors.any()">Post</button>
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
				this.form
					.post(App.url('/statuses'))
					.then(status => this.$emit('completed', status));
			}
		}
	}
</script>