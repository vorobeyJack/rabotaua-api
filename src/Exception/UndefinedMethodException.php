<?php

namespace vrba\rabotaApi\Exception;

/**
 * Class UndefinedMethodException
 *
 * @package vrba\rabotaApi\Exception
 */
class UndefinedMethodException extends \Exception
{
    /**
     * Default exception message.
     */
    private const MESSAGE = 'Current method is not defined!';

    /**
     * UndefinedMethodException constructor.
     *
     * @param string $message
     */
    public function __construct(string $message = self::MESSAGE)
    {
        parent::__construct($message);
    }
}