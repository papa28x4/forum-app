<?php

namespace App\Jobs;

use App\Contracts\ReplyAble;
use App\Events\ReplyWasCreated;
use App\Http\Requests\CreateReplyRequest;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateReplyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private string $body, private User $author, private ReplyAble $replyAble)
    {
        //
    }

    public static function fromRequest(CreateReplyRequest $request)
    {
        return new static(
            $request->body(),
            $request->author(),
            $request->replyAble()
        );
    }
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $reply = new Reply(['body' => $this->body]);
        $reply->authoredBy($this->author);
        $reply->to($this->replyAble);
        $reply->save();

        event(new ReplyWasCreated($reply));

        return $reply;
    }
}
