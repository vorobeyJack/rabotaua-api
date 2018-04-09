<?php declare(strict_types = 1);

namespace vrba\rabotaApi\Resource;

use vrba\rabotaApi\Http\{ResourceContainer, Request};

/**
 * Class Resource
 *
 * @package vrba\rabotaApi\Resource
 */
abstract class Resource
{
    /**
     * @var Request $request
     */
    private $request;

    /**
     * @var ResourceContainer $resourceContainer
     */
    private $resourceContainer;

    /**
     * Resource constructor.
     *
     * @param ResourceContainer $container
     */
    public function __construct(ResourceContainer $container)
    {
        $this->resourceContainer = $container;
        $this->request = $container->getRequest();
    }

    /**
     * Execute one of the following methods: GET, POST, PUT, DELETE
     *
     * @param string $method
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    private function execute(string $method, string $uri, array $params = [])
    {
        return $this->request->$method($this->getResourceUri($uri), $params);
    }

    /**
     * @param string $uri
     * @return string
     */
    private function getResourceUri($uri = '') : string
    {
        $resource = static::RESOURCE;

        return empty($uri) ? $resource : $resource . sprintf('/%s', $uri);
    }
}

