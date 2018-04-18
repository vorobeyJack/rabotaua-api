<?php

namespace vrba\rabotaApi;

use vrba\rabotaApi\Http\Request;
use vrba\rabotaApi\Resource\ResourceContainer;

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
    public static function run($token = null) : ResourceContainer
    {
        return new ResourceContainer(new Request($token));
    }
}