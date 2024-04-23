<?php 

namespace App\Traits;

use App\Models\Reply;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasReplies
{
    public function replies()
    {
        return $this->repliesRelation;
    }

    public function stackReplies()
    {
        return $this->repliesRelation()->latest()->get();
    }

    public function latestReplies(int $amount = 5)
    {
        return $this->repliesRelation()->latest()->limit($amount);
    }

    public function deleteReplies()
    {
        foreach ($this->repliesRelation()->get() as $reply){
            $reply->delete();
        }

        $this->unsetRelation('repliesRelation');
    }

    public function repliesRelation(): MorphMany
    {
        return $this->morphMany(Reply::class, 'repliesRelation', 'replyAble_type', 'replyAble_id');
    }


    public function isConversationOld(): bool
    {
        $threeMonthsAgo = now()->subMonths(3);

        if ($reply = $this->repliesRelation()->latest()->first()) {
            return $reply->createdAt()->lt($threeMonthsAgo);
        }

        return $this->createdAt()->lt($threeMonthsAgo);
    }
}