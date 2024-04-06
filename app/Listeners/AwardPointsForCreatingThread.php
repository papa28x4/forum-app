<?php

namespace App\Listeners;

use App\Events\ThreadWasCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AwardPointsForCreatingThread
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ThreadWasCreated $event)
    {
        $amount = config('points.rewards.new_thread');
        $message = 'User created a thread';
        $author = $event->thread->author();
        $author->addPoints($amount, $message);
    }
}
