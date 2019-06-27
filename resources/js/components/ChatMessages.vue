<template>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-3">
				<div class="card card-default">
					<div class="card-header">
						Private Chat App
					</div>
					<ul class="chat">
						<li class="left clearfix" v-for="message in messages">
							<div class="chat-body clearfix">
								<div class="header">
									<strong class="primary-font">
										<!--{{ message.user.name }}-->
										name
									</strong>
									<a href="/"></a>
								</div>
								<p>
									{{ message.message }}
								</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		// name: "ChatMessages.vue",
		props: ['work'],
		data() {
			return {
				messages: [],
			}
		},
		created() {
			console.log(this.work);
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