<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;

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
        try {
            if (Schema::hasTable('settings')) {
                $themeMode = Setting::where('key', 'theme_mode')->first()->value ?? 'light';
                View::share('themeMode', $themeMode);
            } else {
                View::share('themeMode', 'light');
            }
        } catch (\Exception $e) {
            View::share('themeMode', 'light');
        }
    }
}
