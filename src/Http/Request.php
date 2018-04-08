<?php

namespace vrba\rabotaApi\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Psr\Http\Message\ResponseInterface;

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
     * Base host.
     */
    private const HOST = 'rabota.ua';

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


}