<template>
	<div class="media-list" v-chat-scroll>
		<div class="media" v-for="message in messages" :key="message.id">
			<img v-if="message.user.id !== auth.id" src="http://via.placeholder.com/500x500"
			     class="wd-50 rounded-circle"
			     alt="">
			<div class="media-body" :class="{'reverse':message.user.id == auth.id}">
				<div class="msg">
					<p>{{ message.message }}</p>
				</div>
				<!--<div class="msg">-->
				<!--<p>Are you ready for our party tonight?</p>-->
				<!--</div>-->
			</div>
			<img v-if="message.user.id == auth.id" src="http://via.placeholder.com/500x500" class="wd-50 rounded-circle"
			     alt="">
		</div><!-- media -->
	</div><!-- media-list -->
</template>

<script>
	export default {
		// name: "ChatMessages.vue",
		props: ['work', 'auth'],
		data() {
			return {
				messages: [],
			}
		},
		created() {
			console.log(this.work);
			console.log(this.auth);
			this.fetchMessages(this.work);

			Echo.private(`chat.${this.work}`)
				.listen('MessageSent', (e) => {
					console.log(e);
					this.messages.push({
						message: e.message.message,
						user: e.user
					});
					console.log(this.messages);
				});
		},
		methods: {
			fetchMessages(workid) {
				axios.get(window.base_url + '/fetchmessages/' + workid).then(response => {
					this.messages = response.data;
					// console.log(this.messages);
				});
			},
		}
	}
</script>

<style scoped>

</style>