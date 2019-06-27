<template>
	<div class="input-group">
		<input id="btn-input" type="text" name="message" class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

		<span class="input-group-btn">
            <button class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
	</div>
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