<?php

namespace Acme\Sys;

use Illuminate\Support\ServiceProvider;

class SysServiceProvider extends ServiceProvider
{
    public function boot()
    {
        halt('asdas');
        $this->bootLoadRouter();
    }

    protected function bootLoadRouter(){
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
