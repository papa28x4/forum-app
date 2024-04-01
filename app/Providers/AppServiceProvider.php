<?php

namespace App\Providers;

use App\Http\View\Composers\CategoriesComposer;
use App\Models\Category;
use App\Models\Reply;
use App\Models\Thread;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function bootEloquentMorphsRelations()
    {
        Relation::morphMap([
            Thread::TABLE => Thread::class,
            Reply::TABLE => Reply::class,
            User::TABLE => User::class
        ]);
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View::share('categories', Category::all() );
        $this->bootEloquentMorphsRelations();
        View::composer('*', CategoriesComposer::class );
        
        // View::composer('*', function($view){
        //     $view->with('categories', Category::all());
        // });
    }
}
