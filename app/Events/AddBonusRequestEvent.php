<?php

namespace App\Events;

use App\Models\UserBonus;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AddBonusRequestEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public UserBonus $bonus;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(UserBonus $bonus)
    {
        $this->bonus = $bonus;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
