@extends('layouts.app')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Chats</div>
					
					<div class="panel-body">
						<chat-messages :messages="messages" :work="{{$workid}}"></chat-messages>
					</div>
					<div class="panel-footer">
						<chat-form
								v-on:messagesent="addMessage"
								:work="{{$workid}}"
						></chat-form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection