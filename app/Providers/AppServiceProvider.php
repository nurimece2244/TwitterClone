<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;

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
Schema::defaultStringLength(191);
if (Schema::hasTable('decisions')) {
    $badge = Decision::where('done',false)->count();
    View::share('badge',$badge);
}
}
}
