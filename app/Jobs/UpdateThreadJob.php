<?php

namespace App\Jobs;

use App\Http\Requests\ThreadRequest;
use App\Models\Thread;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;
use Mews\Purifier\Facades\Purifier;
use Illuminate\Support\Arr;

class UpdateThreadJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
 
    // private $attributes;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(private Thread $thread, private array $attributes = [])
    {
        // $this->attributes = Arr::only($attributes, [
        //         'title', 'slug', 'body', 'category', 'tags'
        // ]);
    }


    public static function fromRequest(ThreadRequest $request, Thread $thread)
    {
        $input = $request->validated();

        $attr = [
            ...$input,
            'slug' => Str::slug($input['title']),
            'body' => Purifier::clean(($input['body']))
        ];

        return new static($thread, $attr);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->thread->update($this->attributes);

        if(Arr::has($this->attributes, 'tags')){
            $this->thread->tagsRelation()->sync($this->attributes['tags']);
        }

        return $this->thread;
    }
}
