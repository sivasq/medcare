<template>
	<ul class="chat">
		<li class="left clearfix" v-for="message in messages">
			<div class="chat-body clearfix">
				<div class="header">
					<strong class="primary-font">
<!--						{{ message.user.name }}-->
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
</template>

<script>
	export default {
		// name: "ChatMessages.vue",
		props: ['messages']
	}
</script>

<style scoped>

</style>