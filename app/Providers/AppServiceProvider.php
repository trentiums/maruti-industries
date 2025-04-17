<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Traits\ProductQueryTrait;

class AppServiceProvider extends ServiceProvider
{
    use ProductQueryTrait;
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
        Schema::defaultStringLength(191);
        view()->composer(['*'], function ($view) {
            // Get the product data
            $products = $this->getProductQuery();
            // Pass the categories to the view
            $view->with('products', $products);
        });
    }
}
