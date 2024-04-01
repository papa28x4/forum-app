<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        // return $this->middleware(VerifyAdmin::class);
        // $this->middleware('auth');
    }
    
    public function index()
    {
        return redirect()->route('threads.index');
    }
}
