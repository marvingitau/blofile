<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twitter;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton('l',function(){
        //     return 'test';
        // });
        // $this->app->singleton(Twitter::class,function(){
        //     return new Twitter('ApiKey');
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
