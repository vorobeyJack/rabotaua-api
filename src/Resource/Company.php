<?php declare(strict_types=1);

namespace vrba\rabotaApi\Resource;

/**
 * Class Company
 *
 * @package vrba\rabotaApi\Resource
 */
class Company extends Resource
{
    /**
     * Main resource.
     */
    public const RESOURCE = 'company';

    /**
     * Sub resources.
     */
    private const VACANCIES = 'vacancies';
    private const CUSTOM_DESIGN = 'customdesign';

    /**
     * Return company item.
     *
     * @param int $id
     * @return mixed
     */
    public function getCurrent(int $id)
    {
        return $this->execute('GET', $id);
    }

    /**
     * Return list of vacancies.
     *
     * @param int $id
     * @return mixed
     */
    public function getVacancies(int $id)
    {
        return $this->execute('GET', $id . '/' . self::VACANCIES);
    }

    /**
     * Return custom design.
     *
     * @param int $id
     * @return mixed
     */
    public function getCustomDesign(int $id)
    {
        return $this->execute('GET', $id . '/' . self::CUSTOM_DESIGN);
    }
}