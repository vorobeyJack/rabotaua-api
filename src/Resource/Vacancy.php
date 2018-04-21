<?php

namespace vrba\rabotaApi\Resource;

/**
 * Class Vacancy
 *
 * @package vrba\rabotaApi\Resource
 */
class Vacancy extends Resource
{
    /**
     * Main resource.
     */
    public const RESOURCE = 'vacancy';

    /**
     * Return company item.
     *
     * @param int $id
     * @return mixed
     */
    public function getCurrent(int $id)
    {
        return $this->execute('GET', '?' . $id);
    }
}