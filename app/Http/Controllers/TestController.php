<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $category = Category::find(2);

        return $category->threads;
    }
}
