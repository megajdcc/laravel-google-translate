<?php

namespace Megajdcc\GoogleTranslate;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Megajdcc\GoogleTranslate\GoogleTranslate
 */
class GoogleTranslateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-google-translate';
    }
}
