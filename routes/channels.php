<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

//Broadcast::channel('App.User.{id}', function ($user, $id) {
//    return (int) $user->id === (int) $id;
//});

use App\Work_queue;

Broadcast::channel('chat', function ($user) {
//	return Auth::check();
	return true;
});

Broadcast::channel('chat.{work}', function ($user, $work) {
//	return Auth::check();
//	Log::info(print_r($work->toArray(), true));
	return true;
});