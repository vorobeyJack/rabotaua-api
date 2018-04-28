<?php

namespace vrba\rabotaApi\Resource;

/**
 * Class Resume
 *
 * @package vrba\rabotaApi\Resource
 */
class Resume extends Resource
{
    /**
     * Main resource.
     */
    public const RESOURCE = 'resume';

    /**
     * Returns resume of auth user.
     *
     * @return mixed
     */
    public function getCurrentUserResume()
    {
        return $this->execute('GET');
    }

    /**
     * Return resume item by id.
     *
     * @param int $id
     * @return mixed
     */
    public function getCurrent(int $id)
    {
        return $this->execute('GET', $id);
    }
}