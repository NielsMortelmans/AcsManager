<?php

namespace Nmo\AcsManager;

use Illuminate\Support\ServiceProvider;
use Nmo\AcsManager\Services\Acs;
use Nmo\AcsManager\Services\AcsManager;
use Nmo\AcsManager\Services\ACSService;
use Nmo\AcsManager\Services\ACSTaskService;

class AcsManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config.php', 'acsmanager'
        );
        $this->app->bind('acsservice', function ($app) {
            return new ACSService();
        });
        $this->app->bind('acstaskservice', function ($app) {
            return new ACSTaskService();
        });
        $this->app->bind('acsmanager', function ($app) {
            return new AcsManager();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('acsmanager.php'),
        ], 'config');
    }
}
