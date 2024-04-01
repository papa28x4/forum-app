<?php

namespace App\Listeners;

use App\Events\ReplyWasCreated;
use App\Notifications\NewReplyNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewReplyNotification
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
        $thread = $event->reply->replyAble();

        $thread->author()->notify(new NewReplyNotification($event->reply));
    }
}
