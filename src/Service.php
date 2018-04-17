<?php

namespace vrba\rabotaApi;

use vrba\rabotaApi\Http\{Request, ResourceContainer};

/**
 * Class Service
 *
 * @package vrba\rabotaApi
 */
class Service
{
    /**
     * @param null $token
     * @return ResourceContainer
     */
    public static function run($token = null)
    {
//        echo 'Hello from bullshit!';
        return new ResourceContainer(new Request($token));
    }
}