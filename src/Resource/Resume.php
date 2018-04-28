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
     * Sub resource.
     */
    public const STATE = 'state';
    public const PERSONAL_INFO = 'personal';

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

    /**
     * Returns state of resume.
     *
     * @param int $id
     * @return mixed
     */
    public function getState(int $id)
    {
        return $this->execute('GET', $id . '/' . self::STATE);
    }

    /**
     * Creates resume with user's personal data, personalData:
     * All fields are required
     * {
     *  "name": "string",
     *  "middleName" : "string",
     *  "surName" : "string",
     *  "dateBirth": "2018-04-23T15:50:30.736Z",
     *  "gender": 0
     *  "cityId": 0,
     *  "moving": [
     *       0
     *  ],
     *
     *  "resumeId": 0
     * }
     *
     * @param int $resumeId
     * @param array $personalData
     * @return mixed
     */
    public function createWithPersonalData(int $resumeId, array $personalData = [])
    {
        return $this->execute('POST', $resumeId . '/' . self::PERSONAL_INFO, $personalData);
    }
}