<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\Thread;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(Tag $tag)
    {
        // return url()->current();
        return view('pages.threads.tags.index', [
            'threads' => Thread::ForTag($tag->slug())->paginate(10),
            'tag' => $tag->name()
        ]);
    }
}
