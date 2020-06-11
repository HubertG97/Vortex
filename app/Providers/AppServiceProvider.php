<?php

namespace App\Providers;

use App\Http\Controllers\OSTController;
use Illuminate\Support\Facades\Log;
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
//        $this->app->bind(OSTController::class, function () {
//            Log::info('test1');
//            return OSTController::init();
//        });
    }
}
