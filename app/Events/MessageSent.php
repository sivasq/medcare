<?php

namespace App\Events;

use App\Message;
use App\User;
use App\Work_queue;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class MessageSent implements ShouldBroadcast
{
	use Dispatchable, InteractsWithSockets, SerializesModels;
	
	/**
	 * User that sent the message
	 *
	 * @var User
	 */
	public $user;
	
	/**
	 * Message details
	 *
	 * @var Message
	 */
	public $message;
	
	public $work;
	
	/**
	 * Create a new event instance.
	 *
	 * @param Work_queue $work
	 * @param User $user
	 * @param Message $message
	 */
	public function __construct($work, User $user, Message $message)
	{
		$this->user = $user;
		$this->message = $message;
		$this->work = $work;
	}
	
	/**
	 * Get the channels the event should broadcast on.
	 *
	 * @return Channel|array
	 */
	public function broadcastOn()
	{
		Log::info(print_r($this->work));
		return new PrivateChannel('chat.' . $this->work);
	}
}
