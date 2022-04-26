<?php

namespace zoparga\ModelStatus;

use Illuminate\Support\Facades\Facade;

/**
 * @see \zoparga\ModelStatus\ModelStatus
 */
class ModelStatusFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-model-status';
    }
}
