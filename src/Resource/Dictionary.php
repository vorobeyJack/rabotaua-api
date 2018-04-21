<?php

namespace vrba\rabotaApi\Resource;

/**
 * Class Dictionary
 *
 * @package vrba\rabotaApi\Resource
 */
class Dictionary extends Resource
{
    /**
     * Main resource.
     */
    public const RESOURCE = 'dictionary';

    /**
     * Get any subresource of main resource:dictionary.
     *
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $method, array $arguments = [])
    {
        $subResource = strtolower(str_replace('get','',$method));

        return $this->execute('GET', $subResource);
    }
}