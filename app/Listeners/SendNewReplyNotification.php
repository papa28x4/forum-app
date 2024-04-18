<?php

namespace App\Listeners;

use App\Events\ReplyWasCreated;
use App\Models\User;
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

        foreach($thread->subscriptions() as $subscription){
            if($this->replyAuthorDoesNotMatchSubscriber($event->reply->author(), $subscription)){
                $subscription->user()->notify(new NewReplyNotification($event->reply, $subscription));
            }
        }

        $thread->author()->notify(new NewReplyNotification($event->reply, null));
    }

    private function replyAuthorDoesNotMatchSubscriber(User $author, $subscription): bool
    {
        return !$author->matches($subscription->user());
    }
}
