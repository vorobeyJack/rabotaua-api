<?php

namespace vrba\rabotaApi\Resource;

/**
 * Class Vacancy
 *
 * @todo - figure out with POST endpoints.
 * @package vrba\rabotaApi\Resource
 */
class Vacancy extends Resource
{
    /**
     * Main resource.
     */
    public const RESOURCE = 'vacancy';

    /**
     * Sub resources.
     */
    public const QUESTIONS = 'questions';

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

    /**
     * @todo - refactor/debug generating uri with query params
     *
     * @param int $id
     * @return mixed
     */
    public function getQuestions(int $id)
    {
        return $this->execute('GET', '/' . self::QUESTIONS . '?' . $id);
    }
}