<?php

namespace Database\Seeders;

use App\Models\Reply;
use App\Notifications\NewReplyNotification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reply::all()->each(function(Reply $reply){
            $reply->author()->notifications()->create([
                'id' => Str::uuid()->toString(),
                'type' => NewReplyNotification::class,
                'data' => [
                    'type' => 'new_reply',
                    'reply' => $reply->id(),
                    'replyAble_id' => $reply->replyAble_id,
                    'replayAble_type' => $reply->replyAble_type,
                    'replyAble_subject' => $reply->replyAble()->replyAbleSubject()
                ],
                'created_at' => $reply->createdAt(),
                'updated_at' => $reply->updatedAt()
            ]);
        });
    }
}
