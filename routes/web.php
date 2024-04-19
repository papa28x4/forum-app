<?php


use App\Http\Controllers\Dashboard\NotificationController;
use App\Http\Controllers\Pages\CategoryController;
use App\Http\Controllers\Pages\FollowController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pages\PageController;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\ProfileController;
use App\Http\Controllers\Pages\ReplyController;
use App\Http\Controllers\pages\TagController;
use App\Http\Controllers\Pages\ThreadController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
require 'admin.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'threads', 'as' => 'threads.'], function(){
    /**
     * Name: Threads
     * Url: /threads/*
     * Route: threads.*
     */
    Route::get('/', [ThreadController::class, 'index'])->name('index');
    Route::get('/create', [ThreadController::class, 'create'])->name('create');
    Route::post('/', [ThreadController::class, 'store'])->name('store');
    Route::get('/{thread:slug}/edit', [ThreadController::class, 'edit'])->name('edit');
    Route::put('/{thread:slug}/update', [ThreadController::class, 'update'])->name('update');
    Route::get('/{category:slug}/{thread:slug}', [ThreadController::class, 'show' ])->name('show');
    Route::get('{category:slug}/{thread:slug}/subscribe', [ThreadController::class, 'subscribe'])->name('subscribe');
    Route::get('{category:slug}/{thread:slug}/unsubscribe', [ThreadController::class, 'unsubscribe'])->name('unsubscribe');

    Route::group(['as' => 'tags.'], function(){
        Route::get('/{tag:slug}', [TagController::class, 'index'])->name('index');
    });
});

Route::group(['prefix' => 'categories', 'as' => 'categories.'], function(){
    Route::get('/{category:slug}', [CategoryController::class, 'index'])->name('category');
});

Route::group(['prefix' => 'replies', 'as'=> 'replies.'], function(){
    /**
     * Name: Replies
     * Url: /replies/*
     * Route: replies.*
     */
    Route::post('/', [ReplyController::class, 'store'])->name('store');
    Route::get('/{reply}/edit', [ReplyController::class, 'edit'])->name('edit');
    Route::put('/{reply}', [ReplyController::class, 'update'])->name('update');
    Route::delete('/{reply}', [ReplyController::class, 'destroy'])->name('destroy');
    Route::get('reply/{id}/{type}', [ReplyController::class, 'redirect'])->name('replyable');
});

Route::group(['prefix' => 'dashboard', 'as'=> 'dashboard.'], function(){
    /**
     * Name: Notifications
     * Url: dashboard/notifications/*
     * Route: dashboard.notifications.*
     */
    Route::group(['prefix' => 'notifications', 'as'=> 'notifications.'], function(){
        Route::get('/', [NotificationController::class, 'index'])->name('index');
    });
});

//Profile
Route::get('user/{user:slug}', [ProfileController::class, 'show'])->name('profile');

//Follows
Route::post('profile/user/{user:slug}/follow', [FollowController::class, 'store'])->name('user.follow');

// dashboard.notifications.index
Route::get('/category/discussion/topic', [PageController::class, 'single'])->name('single');

Route::get('discussion/create', [PageController::class, 'create'])->name('create');

Route::get('dashboard/users', [PageController::class, 'users'])->name('users');

Route::get('/dashboard/categories/index', [PageController::class, 'categoriesIndex'])->name('categories.index');
Route::get('/dashboard/categories/create', [PageController::class, 'categoriesCreate'])->name('categories.create');

Route::get('test', [TestController::class, 'index'])->name('test.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('home.index');
    })->name('dashboard');
});
