<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateReplyRequest;
use App\Jobs\CreateReplyJob;
use App\Models\Reply;
use App\Policies\ReplyPolicy;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function __construct()
    {
        return $this->middleware(['auth', 'verified']);
    }

    public function store(CreateReplyRequest $request)
    {
        // return $request;
        
        $this->authorize('create', Reply::class);

        $this->dispatchSync(CreateReplyJob::fromRequest($request));

        return back()->with('success', 'Reply Created');
    }

    public function redirect($id, $type)
    {
        $reply = Reply::where('replyable_id', $id)->where('replyable_type', $type)
                  ->firstOrFail();

                //   dd($reply);
        
        return redirect()->route('threads.show', [$reply->replyAble()->category->slug(), $reply->replyAble()->slug() ]);
    }
}
