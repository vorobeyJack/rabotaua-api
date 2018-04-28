<?php declare(strict_types=1);

namespace vrba\rabotaApi\Resource;

use vrba\rabotaApi\Exception\IncorrectResourceParameterException;

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
     * Returns resume item by id.
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
     * @param array $personalData
     * @return mixed
     * @throws IncorrectResourceParameterException
     */
    public function createWithPersonalData(array $personalData = [])
    {
        if(!isset($personalData['resumeId'])) {
            throw new IncorrectResourceParameterException('resumeId');
        }

        return $this->execute('POST', $personalData['resumeId'] . '/' . self::PERSONAL_INFO, $personalData);
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
     * @param array $personalData
     * @return mixed
     * @throws IncorrectResourceParameterException
     */
    public function createAdditionalWithPersonalData(array $personalData = [])
    {
        if(!isset($personalData['resumeId'])) {
            throw new IncorrectResourceParameterException('resumeId');
        }

        return $this->execute('POST', $personalData['resumeId'] . '/' . self::PERSONAL_INFO, $personalData);
    }
}