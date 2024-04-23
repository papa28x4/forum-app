<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Thread;
use Carbon\Carbon;

class TestController extends Controller
{
    public function index()
    {
    
        // $collection = collect([
        //     ['name' => 'Desk', 'price' => 200],
        //     ['name' => 'Chair', 'price' => 100],
        //     ['name' => 'Bookcase', 'price' => 150],
        // ]);
         
        // $sorted = $collection->sortBy('price')->values()->all();

        // return $sorted;
       
        
        $threads = Thread::has('repliesRelation')->withCount('repliesRelation')
                        ->whereBetween('created_at', [Carbon::now()->startOfWeek(Carbon::SUNDAY), Carbon::now()->endOfWeek(Carbon::SATURDAY)])
                        ->orderBy('replies_relation_count', 'desc')->get();


        // $a = $threads->sortByDesc('replies_relation_count')->values()->take(5);
       
        // return User::with(['posts.comments' => function($query) {
        //     $query->orderBy('comments.likes_count', 'desc');
        // }])->get();



        return $threads;

        // return $a;
        // return $threads->values()->all();
        
        // return $threads;
        // $threads = Thread::doesntHave('repliesRelation')->get();

        // $threads = Thread::all();

        // return $threads;

        // return count($threads);
    }
}
