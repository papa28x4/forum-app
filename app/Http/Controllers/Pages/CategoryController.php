<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Thread;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $threads = $category->threads()->latest()->paginate(10); 

        return view('pages.threads.index', [
            'threads' => $threads
        ]);
    }
}
