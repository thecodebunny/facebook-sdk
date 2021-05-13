<?php

namespace Thecodebunny\FacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thecodebunny\FacebookSdk\Skeleton\SkeletonClass
 */
class FacebookSdkFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'facebook-sdk';
    }
}
