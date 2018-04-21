<?php

namespace vrba\rabotaApi\Http\Response;

/**
 * Class ErrorResponse
 *
 * @package vrba\rabotaApi\Http\Response
 */
class ErrorResponse
{
    /**
     * Error code.
     *
     * @var int $code
     */
    private $code;

    /**
     * Error message.
     *
     * @var string $message
     */
    private $message;

    /**
     * ErrorResponse constructor.
     *
     * @param \Throwable $e
     */
    public function __construct(\Throwable $e)
    {
        $this->code = $e->getCode();
        $this->message = $e->getMessage();
    }
}