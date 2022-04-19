<?php

namespace Devalimwa\FilesApi;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Devalimwa\FilesApi\Skeleton\SkeletonClass
 */
class FilesApiFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'files-api';
    }
}
