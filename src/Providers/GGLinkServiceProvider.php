<?php

namespace Mahabub\GGLink\Providers;

use Illuminate\Support\ServiceProvider;

class GGLinkServiceProvider extends ServiceProvider
{
    /**
     * Register gglink application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->loadRoutesFrom(__DIR__.'/../../routes/gglink-routes.php');
		$this->loadViewsFrom(__DIR__.'/../../resources/views', 'gglink');
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'gglink');
    }

}