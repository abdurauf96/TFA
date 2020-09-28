<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.news', function($view){
            $posts=\App\Post::withTranslation(\App::getLocale())->limit(3)->orderBy('view', 'desc')->get();
            $categories=\App\Category::withTranslation(\App::getLocale())->get();
            $view->with(compact('posts'));
        });

        view()->composer('layouts.categories', function($view){
            $categories=\App\Category::withTranslation(\App::getLocale())->get();
            $view->with(compact('categories'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
