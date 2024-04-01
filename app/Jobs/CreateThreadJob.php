<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Http\Requests\ThreadRequest;
use App\Models\Thread;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Str;

class CreateThreadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private string $title, private string $body, 
                                private string $category, private array $tags, private User $author )
    {
        //
    }

    public static function fromRequest(ThreadRequest $request) 
    {
        return new static(
            $request->title(),
            $request->body(),
            $request->category(),
            $request->tags(),
            $request->author()
        );
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): Thread
    {
        $thread = new Thread([
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'body' => Purifier::clean($this->body),
            'category_id' => $this->category,
        ]);

        $thread->authoredBy($this->author);
        $thread->saveThreadWithTags($this->tags);
        
       

        return $thread;
    }
}
