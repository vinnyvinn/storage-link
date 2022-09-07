<?php

namespace Vinnyvinn\StorageLink;

use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends \Illuminate\Foundation\Support\Providers\RouteServiceProvider
{

    protected $namespace = "Vinnyvinn\StorageLink\Http\Controllers";

    function map() {
        Route::namespace($this->namespace)
            ->group(__DIR__.'/routes/web.php');
    }
}
