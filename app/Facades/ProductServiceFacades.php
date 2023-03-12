<?php

namespace App\Facades;

use App\Contracts\Services\ProductServiceInterface;
use Illuminate\Support\Facades\Facade;

class ProductServiceFacades extends Facade {
   protected static function getFacadeAccessor() { return ProductServiceInterface::class; }
}