<?php declare(strict_types=1);

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
     * Gets following subresources:
     * /education
     * /schedule
     * /language/skill
     * /city
     * /resource
     * /language
     * /experience
     * /currency
     * /statusapplication/experience
     * /statusapplication/salary
     * /additional
     * /vacancystate
     * /rubric
     * /subrubric
     * /gender
     * /branch
     * /zapros
     * /ativitylevel
     *
     * @param string $method
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $method, array $arguments = [])
    {
        $method = str_replace('List', '', $method);
        $subResource = strtolower(str_replace('get', '', $method));

        return $this->execute('GET', $subResource);
    }
}