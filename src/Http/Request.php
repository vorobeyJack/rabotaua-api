<?php

namespace vrba\rabotaApi\Http;
use GuzzleHttp\Client;

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

    private const POST = 'POST';
    private const PUT = 'PUT';
    private const GET = 'GET';
    private const DELETE = 'DELETE';

    /**
     * Base http methods.
     */
    private const METHODS = [
        self::GET,
        self::POST,
        self::PUT,
        self::DELETE
    ];

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
    }
}