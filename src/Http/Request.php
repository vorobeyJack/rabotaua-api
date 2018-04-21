<?php declare(strict_types=1);

namespace vrba\rabotaApi\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Psr\Http\Message\ResponseInterface;
use vrba\rabotaApi\Http\Response\ErrorResponse;

/**
 * Class Request
 *
 * Base class for handling requests.
 *
 * @package vrba\rabotaApi\Http
 */
class Request
{
    /**
     * Base url.
     */
    private const URL = 'https://api.rabota.ua';

    /**
     * Base http methods.
     */
    private const POST = 'POST';
    private const PUT = 'PUT';
    private const GET = 'GET';
    private const DELETE = 'DELETE';

    /**
     * Guzzle client.
     *
     * @var Client $client
     */
    private $client;

    /**
     * Headers array.
     *
     * @var array $headers
     */
    private $headers = [];

    /**
     * Request constructor.
     *
     * @param string|null $token
     */
    public function __construct(string $token = null)
    {
        $this->client = new Client(['base_uri' => self::URL]);

        if ($token) {
            $this->addAuthToken($token);
        }
    }

    /**
     * Execute request.
     *
     * @param string $method
     * @param string $uri
     * @param array $options
     * @return array|null|ErrorResponse
     */
    private function makeRequest(string $method, string $uri, array $options = [])
    {
        $request = new GuzzleRequest($method, $uri, $this->headers);

        try {
            $response = $this->client->send($request, $options);
        } catch (\Throwable $e) {
            return new ErrorResponse($e);
        }

        return $this->handleResponse($response);
    }

    /**
     * Handle response.
     *
     * @param ResponseInterface $response
     * @return array|null
     */
    private function handleResponse(ResponseInterface $response)
    {
        return json_decode((string)$response->getBody(), true);
    }

    /**
     * @param string $uri
     * @param array $params
     * @return array|null
     */
    public function get(string $uri, array $params = [])
    {
        $uri = $this->makeUriWithQuery($uri, $params);

        return $this->makeRequest(self::GET, $uri);
    }

    /**
     * @param string $uri
     * @param array $params
     * @return array|null
     */
    public function delete(string $uri, array $params = [])
    {
        $uri = $this->makeUriWithQuery($uri, $params);

        return $this->makeRequest(self::DELETE, $uri);
    }

    /**
     * @param string $uri
     * @param array $params
     * @return array|null
     */
    public function post(string $uri, array $params = [])
    {
        return $this->makeRequest(self::POST, $uri, ['query' => $params]);
    }

    /**
     * @param string $uri
     * @param array $params
     * @return array|null
     */
    public function put($uri, $params = [])
    {
        return $this->makeRequest(self::PUT, $uri, ['query' => $params]);
    }

    /**
     * Add authentication token to headers.
     *
     * @param string $token
     */
    private function addAuthToken(string $token): void
    {
        $this->headers = ['Authorization' => 'Bearer ' . $token];
    }

    /**
     * Make URI with params.
     *
     * @param string $uri
     * @param array $params
     * @return string
     */
    private function makeUriWithQuery(string $uri, array $params = []): string
    {
        if (!empty($params)) {
            $uri .= '?' . $this->makeQueryFormattedString($params);
        }

        return $uri;
    }
}