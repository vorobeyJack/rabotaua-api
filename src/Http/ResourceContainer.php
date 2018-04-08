<?php

namespace vrba\rabotaApi\Http;

use vrba\rabotaApi\Exception\UndefinedResourceException;
use vrba\rabotaApi\Resource\Resource;

class ResourceContainer
{
    /**
     * @var array $endpoints
     */
    private $endpoints = [];

    /**
     * Add resource if not exists.
     *
     * @param string $endpoint
     * @return ResourceContainer
     * @throws UndefinedResourceException
     */
    private function addResourceEndpoint(string $endpoint) : ResourceContainer
    {
        $class = __NAMESPACE__ . '\\' . ucfirst($endpoint);

        if (!$this->isResourceExists($endpoint)) {
            throw new UndefinedResourceException();
        }

        $this->endpoints[$endpoint] = new $class($this);

        return $this;
    }

    /**
     * Check is resource exists.
     *
     * @param $class
     * @return bool
     */
    private function isResourceExists($class) : bool
    {
        if (class_exists($class)) {
            return false;
        }

        return is_subclass_of(new $class, Resource::class);
    }
}
