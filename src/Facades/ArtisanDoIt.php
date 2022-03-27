<?php

namespace Ffaa1234\ArtisanDoIt\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ffaa1234\ArtisanDoIt\ArtisanDoIt
 */
class ArtisanDoIt extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'artisan-do-it';
    }
}
