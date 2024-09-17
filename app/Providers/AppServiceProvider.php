<?php

namespace App\Providers;
namespace Milon\Barcode;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->register(Milon\Barcode\BarcodeServiceProvider::class);
        $this->app->alias('DNS1D', Milon\Barcode\Facades\DNS1DFasad::class);
        $this->app->alias('DNS2D', Milon\Barcode\Facades\DNS2DFasad::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

