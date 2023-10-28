<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LuhnValidationStrategy;
use App\Services\CreditCardValidation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CreditCardValidation::class, LuhnValidationStrategy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
