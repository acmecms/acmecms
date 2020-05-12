<?php

namespace Acme\Sys;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class SysServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->bootLoadRouter();
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sys');
        $this->publishes([__DIR__.'/../resources/assets' => public_path('acmecms')], 'acmecms-assets');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function bootLoadRouter(){
        Route::namespace('Acme\Sys\Controllers')->prefix('sys')->group(__DIR__.'/routes.php');
    }
}
