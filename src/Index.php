<?php

namespace vrba\rabotaApi;

use vrba\rabotaApi\Http\{Request, ResourceContainer};

/**
 * Class Index
 *
 * @package vrba\rabotaApi
 */
class Index
{
    /**
     * @return ResourceContainer
     */
    public function run()
    {
        return new ResourceContainer(new Request());
    }
}
