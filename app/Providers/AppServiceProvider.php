<?php

namespace App\Providers;

use App\Models\Gallery;
use App\Models\Setting;
use App\Models\Service;
use App\Policies\StoreProductPolicy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $shareSetting = Setting::first();
        $footerServices = Service::where('status', 1)->orderBy('created_at', 'desc')->take(5)->get();
        View::share([
            'shareSetting' => $shareSetting,
            'footerServices' => $footerServices,
        ]);

        Paginator::useBootstrap();
    }
}
