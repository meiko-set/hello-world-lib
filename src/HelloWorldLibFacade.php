<?php

namespace MeikoSet\HelloWorldLib;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MeikoSet\HelloWorldLib\Skeleton\SkeletonClass
 */
class HelloWorldLibFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hello-world-lib';
    }
}
