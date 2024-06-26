<?php

namespace App\Listeners;

use App\Events\ReplyWasCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class AwardPointsForCreatingReply
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
    public function handle(ReplyWasCreated $event)
    {
        Log::info('Working');
        $amount = config('points.rewards.new_reply');
        $message = 'User created a reply';

        $author = $event->reply->author();

        $author->addPoints($amount, $message);
    }
}
