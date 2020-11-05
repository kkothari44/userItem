<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Container\ItemContract;
use App\Container\ItemContainer;
use App;
class ItemServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        App::bind(ItemContract::class, function() {
            return new ItemContainer();
        });
    }
}
