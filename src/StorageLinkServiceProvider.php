<?php

namespace Vinnyvinny\StorageLink;

use Illuminate\Support\ServiceProvider;

class StorageLinkServiceProvider extends ServiceProvider
{

    function boot() {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
    }

    function register(){

    }


}
