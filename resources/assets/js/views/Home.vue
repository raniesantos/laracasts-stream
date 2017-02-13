<template>
	<div class="columns">
		<div class="column">
			<div class="message" v-for="status in statuses">
				<div class="message-header">
					<p>
						{{ status.user.name }} said...
					</p>

					<p>
						{{ status.created_at | ago }}
					</p>
				</div>

				<div class="message-body" v-text="status.body">
					I'm an example component!
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	import moment from 'moment';
	import Status from '../models/Status';

	export default {
		data() {
			return {
				statuses: []
			}
		},
		created() {
			Status.all(statuses => this.statuses = statuses);
		},
		filters: {
			ago(date) {
				return moment(date).fromNow();
			}
		}
	}
</script>
