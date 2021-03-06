<?php

namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use App\Models\Post;

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

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('settings', Setting::first());
        View::share('banner', Post::where('isBanner', '=', '1')->first());
    }
}
