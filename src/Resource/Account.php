<?php

namespace vrba\rabotaApi\Resource;

/**
 * Class Account
 *
 * @package vrba\rabotaApi\Resource
 */
class Account extends Resource
{
    /**
     * Main resource.
     */
    public const RESOURCE = 'account';

    /**
     * Sub resource.
     */
    public const FEEDBACK = 'feedback';
    public const PHOTO = 'photo';
    public const LOGIN = 'LOGIN';

    /**
     * Returns feedback reply.
     *
     * @param int $id
     * @return mixed
     */
    public function getFeedback(int $id)
    {
        return $this->execute('GET', self::FEEDBACK .'?replyId='. $id);
    }
}