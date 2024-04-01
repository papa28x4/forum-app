<?php 

namespace App\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphMany;

interface ReplyAble
{
    // public function subject(): string;

    /**
     * @return \App\Models\Reply;
     */
    public function replies();

    public function latestReplies(int $amount = 5);

    public function deleteReplies();

    public function repliesRelation(): MorphMany;

    public function replyAbleSubject(): string;
}