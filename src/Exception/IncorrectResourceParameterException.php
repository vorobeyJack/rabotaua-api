<?php

namespace vrba\rabotaApi\Exception;

/**
 * Class IncorrectResourceParameterException
 *
 * @package vrba\rabotaApi\Exception
 */
class IncorrectResourceParameterException extends \Exception
{
    /**
     * Default exception message.
     */
    private const MESSAGE = 'Incorrect value';

    /**
     * IncorrectResourceParameterException constructor.
     *
     * @param string $message
     * @param string $parameter
     */
    public function __construct(string $message = self::MESSAGE, string $parameter)
    {
        parent::__construct($message. 'Parameter: '.$parameter);
    }
}