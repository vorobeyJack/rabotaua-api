<?php declare(strict_types=1);

namespace vrba\rabotaApi\Resource;

use vrba\rabotaApi\Http\Request;

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
     * Executes request.
     *
     * @param string $method
     * @param string $uri
     * @param array $params
     * @return mixed
     */
    protected function execute(string $method, string $uri = '', array $params = [])
    {
        $methodName = strtolower($method);

        return $this->request->$methodName($this->getResourceUri($uri), $params);
    }

    /**
     * Gets resource uri.
     *
     * @param string $uri
     * @return string
     */
    private function getResourceUri($uri = ''): string
    {
        $resource = static::RESOURCE;
        $uriPlaceholder = sprintf('/%s', $uri);

        return empty($uri) ? $resource : $resource . $uriPlaceholder;
    }
}