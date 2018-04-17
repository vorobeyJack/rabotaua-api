<?php

namespace vrba\rabotaApi\Exception;

/**
 * Class UndefinedResourceException
 *
 * @package vrba\rabotaApi\Exception
 */
class UndefinedResourceException extends \Exception
{
    /**
     * Default exception message.
     */
    private const MESSAGE = 'Current resource in not defined!';

    /**
     * UndefinedResourceException constructor.
     *
     * @param string $message
     */
    public function __construct(string $message = self::MESSAGE)
    {
        parent::__construct($message);
    }
}