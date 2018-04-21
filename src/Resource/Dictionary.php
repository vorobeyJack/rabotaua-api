<?php

namespace vrba\rabotaApi\Resource;

/**
 * Class Dictionary
 *
 * @package vrba\rabotaApi\Resource
 */
class Dictionary extends Resource
{
    /**
     * Main resource.
     */
    public const RESOURCE = 'dictionary';

    /**
     * Education lists.
     */
    private const EDUCATION = 'education';

    /**
     * Fulltime/parttime cases.
     */
    private const SCHEDULE = 'schedule';

    /**
     * Language levels.
     */
    private const LANGUAGE_SKILL = 'language/skill';

    /**
     * Cities list.
     */
    private const CITY = 'city';

    /**
     * Expitiencies list.
     */
    private const EXPERIENCE = 'experience';

    /**
     * Activity level.
     */
    private const ACTIVITY_LEVEL = 'activitylevel';

    /**
     * Genders.
     */
    private const GENDER = 'gender';

    /**
     * Categories.
     */
    private const RUBLIC = 'rublic';

    /**
     * Subcategories.
     */
    private const SUBRUBRIC = 'subrubric';

    /**
     * Additional info.
     */
    private const ADDITIONAL = 'additional';

    /**
     * Currency.
     */
    private const CURRENCY = 'currency';

    /**
     * Salaries list.
     */
    private const STATUSAPPLIECTION_SALARY = 'statusapplication/salary';

    /**
     * Vacancy state.
     */
    private const VACANCY_STATE = 'vacancystate';

    /**
     * Returns list of education.
     *
     * @return mixed
     */
    public function getEducation()
    {
        return $this->execute('GET', self::EDUCATION);
    }

    public function getSchedule()
    {
        return $this->execute('GET', self::SCHEDULE);
    }
}