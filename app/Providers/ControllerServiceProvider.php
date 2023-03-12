<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ControllerServiceProvider extends ServiceProvider
{

    protected array $services = [
        'App\Contracts\UserServiceInterface' => 'App\Services\UserService'
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->services as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
