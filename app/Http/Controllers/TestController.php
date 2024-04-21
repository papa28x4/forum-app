<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Thread;

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
         
        
        $threads = Thread::has('repliesRelation')->withCount('repliesRelation')->get();


        $a = $threads->sortByDesc('replies_relation_count')->values()->take(5);
       

        return $a;

        // return $a;
        // return $threads->values()->all();
        
        // return $threads;
        // $threads = Thread::doesntHave('repliesRelation')->get();

        // $threads = Thread::all();

        // return $threads;

        // return count($threads);
    }
}
