<template>
	<div class="row row-sm">
		<div class="col-11 col-sm-10 col-xl-11">
			<input type="text" name="message" class="form-control" placeholder="Type message here..."
			       v-model="newMessage" @keyup.enter="sendMessage">
		</div><!-- col-8 -->
		<div class="col-1 col-sm-2 col-xl-1 tx-right">
			<div class="d-none d-sm-block">
				<div @click="sendMessage" class="btn btn-outline btn-icon rounded-circle">
					<a href="" @click.prevent><i class="fa fa-2x fa-paper-plane mg-r-5"></i></a>
				</div>
			</div>
		</div><!-- col-4 -->
	</div><!-- row -->
</template>

<script>
	export default {
		// name: "ChatForm.vue",
		props: ['work'],

		data() {
			return {
				newMessage: ''
			}
		},

		methods: {
			sendMessage() {
				if (this.newMessage == '') {
					return false;
				}
				this.$emit('messagesent', {
					workid: this.work,
					message: this.newMessage
				});

				this.newMessage = ''
			}
		}
	}
</script>

<style scoped>

</style>