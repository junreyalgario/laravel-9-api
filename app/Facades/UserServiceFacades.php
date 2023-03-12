<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Contracts\Services\UserServiceInterface;

class UserServiceFacades extends Facade {
   protected static function getFacadeAccessor() { return UserServiceInterface::class; }
}