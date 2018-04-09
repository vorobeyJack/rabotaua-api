<?php

namespace vrba\rabotaApi\Http;

use vrba\rabotaApi\Exception\{UndefinedMethodException, UndefinedResourceException};
use vrba\rabotaApi\Resource\Resource;

/**
 * Class ResourceContainer
 *
 * @package vrba\rabotaApi\Http
 */
class ResourceContainer
{
    /**
     * @var array $endpoints
     */
    private $endpoints = [];

    /**
     * @var Request $request
     */
    private $request;

    /**
     * ResourceContainer constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return Request
     */
    public function getRequest() : Request
    {
        return $this->request;
    }

    /**
     * @param string $endpoint
     * @return string
     * @throws UndefinedResourceException
     */
    public function __get(string $endpoint) : string
    {
        return $this->getResourceEndpoint($endpoint);
    }

    /**
     * @param string $method
     * @param array $arguments
     * @return ResourceContainer
     * @throws UndefinedMethodException
     */
    public function __call(string $method, array $arguments = []) : ResourceContainer
    {
        if (!method_exists($this->request, $method)) {
            throw new UndefinedMethodException();
        }

        return $this->executeMethod($method, $arguments);
    }

    /**
     * @param $endpoint
     * @return string
     * @throws UndefinedResourceException
     */
    public function getResourceEndpoint($endpoint) : string
    {
        if (!isset($this->endpoints[$endpoint])) {
            $this->addResourceEndpoint($endpoint);
        }

        return $this->endpoints[$endpoint];
    }

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

    /**
     * Execute method.
     *
     * @param string $method
     * @param array $arguments
     * @return ResourceContainer
     */
    protected function executeMethod(string $method, array $arguments) : ResourceContainer
    {
        $this->request->$method($arguments);

        return $this;
    }
}
