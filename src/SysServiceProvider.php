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
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function bootLoadRouter(){
        Route::prefix('sys')->group(__DIR__.'/routes.php');
//        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
//        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
