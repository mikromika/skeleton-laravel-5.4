https://github.com/cartalyst/sentinel/issues/327

Answers: 
https://laravel-news.com/laravel-5-4-key-too-long-error

Fix :
<code>
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //https://laravel-news.com/laravel-5-4-key-too-long-error
        // here is fix 
       Schema::defaultStringLength(191);

    } 
    </code>
