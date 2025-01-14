<?php

namespace Nordecode\ImageOptimizer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nordecode\ImageOptimizer\ImageOptimizer
 */
class ImageOptimizer extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return self::class;
    }
}
