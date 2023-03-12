<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Services interface and imlementation list
     */
    protected $services = [
        'App\Contracts\Services\UserServiceInterface' => 'App\Services\UserService',
        'App\Contracts\Services\ProductServiceInterface' => 'App\Services\ProductService'
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->services as $interface => $implementation) {
            App::bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
