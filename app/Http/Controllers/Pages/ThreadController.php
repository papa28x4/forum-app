<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ThreadRequest;
use App\Jobs\CreateThreadJob;
use App\Jobs\SubscribeToSubscriptionable;
use App\Jobs\UnsubscribeFromSubscriptionable;
use App\Jobs\UpdateThreadJob;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Thread;
use App\Policies\ThreadPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Str;
// use Mews\Purifier\Facades\Purifier;

class ThreadController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified'])->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        return view('pages.threads.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.threads.create', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ThreadRequest $request)
    {
        $this->dispatchSync(CreateThreadJob::fromRequest($request));

        return redirect()->route('threads.index')->with('success', 'Thread Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, Thread $thread)
    {
        // return $thread->subscriptions();
        
        // Session::put('current_thread', request()->fullUrl());
        $expiresAt = now()->addHours(12);
        views($thread)
            ->cooldown($expiresAt)
            ->record();
        return view('pages.threads.show', compact('thread', 'category'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function edit(Thread $thread)
    {
        $this->authorize('update', $thread);

        $tags = Tag::all();

        $oldTags = $thread->tags()->pluck('id')->toArray();
        
        return view('pages.threads.edit', compact('thread', 'tags', 'oldTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thread  $thread
     * @return \Illuminate\Http\Response
     */
    public function update(ThreadRequest $request, Thread $thread)
    {
        $this->authorize('update', $thread);

        $this->dispatchSync(UpdateThreadJob::fromRequest($request, $thread));

        return redirect()->route('threads.index')->with('success', 'Thread Updated');
    }

    public function subscribe(Request $request, Category $category, Thread $thread)
    {
        
        $this->authorize('subscribe', $thread);

        $this->dispatchSync(new SubscribeToSubscriptionable($request->user(), $thread));

        return redirect()->route('threads.show', [$thread->category->slug(), $thread->slug()])
                ->with('success', 'You have been subscribed to this thread');
    }

    public function unsubscribe(Request $request, Category $category, Thread $thread)
    {
        $this->authorize('unsubscribe', $thread);

        $this->dispatchSync(new UnsubscribeFromSubscriptionable($request->user(), $thread));

        return redirect()->route('threads.show', [$thread->category->slug(), $thread->slug()])
                ->with('success', 'You have been unsubscribed from this thread');
    }

    public function popularAllTime()
    {
        return view('pages.threads.index', ["pageKey" => 'allTime']);
    }

    public function popularThisWeek()
    {
        return view('pages.threads.index', ["pageKey" => 'weekly']);
    }

    public function noReply()
    {
        return view('pages.threads.index', ["pageKey" => 'noReply']);
    }
}
