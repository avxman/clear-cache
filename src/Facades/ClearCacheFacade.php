<?php

namespace Avxman\ClearCache\Facades;

use Avxman\ClearCache\Providers\ClearCacheServiceProvider;
use Illuminate\Support\Facades\Facade;
use Avxman\ClearCache\Classes\ClearCacheClass;

/**
 * Фасад вкл./откл. внешних ссылок в контексте на сайте
 *
 * @see
 */
class ClearCacheFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ClearCacheServiceProvider::class;
    }

}
