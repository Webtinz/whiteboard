<?php

namespace App\Events;

use App\Models\User;
use App\Models\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;

class SendMessage implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel
     */
    public function broadcastOn()
    {
        return new Channel('user-messages' );
    }

    /**
     * Prepare the data to be broadcast.
     *
     * @return array
     */
    public function broadcastWith()
    {
        $user = User::find($this->message->sender_id);

        if ($user) {
            return [
                'content' => $this->message->content,
                'receiver_id' => $this->message->receiver_id,
                'group_id' => $this->message->group_id,
                'sender_id' => $this->message->sender_id,
                'files' => $this->message->files,
                'user' => [
                    'id' => $user->id,
                    'name' => $user->name,
                    // 'image' => asset('storage/' . $user->picture),
                ],
                'created_at' => $this->message->created_at,
            ];
        }
    }

    /**
     * The name of the event to broadcast.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'user-message';
    }
}
