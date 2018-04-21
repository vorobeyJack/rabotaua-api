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
     * Sub resources.
     */
    private const EDUCATION = 'education';
    private const SCHEDULE = 'schedule';
    private const LANGUAGE_SKILL = 'language/skill';
    private const CITY = 'city';
    private const EXPERIENCE = 'experience';
    private const ACTIVITY_LEVEL = 'activitylevel';
    private const GENDER = 'gender';
    private const RUBLIC = 'rublic';
    private const SUBRUBRIC = 'subrubric';
    private const ADDITIONAL= 'additional';
    private const CURRENCY = 'currency';
    private const STATUSAPPLIECTION_SALARY = 'statusapplication/salary';
    private const VACANCY_STATE = 'vacancystate';
}