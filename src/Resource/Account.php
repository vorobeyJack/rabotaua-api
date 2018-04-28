<?php declare(strict_types=1);

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
    public const LOGIN = 'login';

    /**
     * Returns feedback reply:
     * [
        {
        "id": 0,
        "requestId": 0,
        "byUser": true,
        "hide": true,
        "sentToUser": true,
        "email": "string",
        "text": "string",
        "avatar": "string",
        "addDate": "2018-04-23T15:50:22.354Z"
        }
    ]
     *
     * @param int $id
     * @return mixed
     */
    public function getFeedback(int $id)
    {
        return $this->execute('GET', self::FEEDBACK . '?replyId=' . $id);
    }

    /**
     * Returns auth user photo: "https://images.cf-rabota.com.ua/2017/04/user-photo.png"
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->execute('GET', '/' . self::PHOTO);
    }

    /**
     * Returns user info - for instance:
     * {
        "username": "example@mail.com",
        "password": "123456",
        "remember": true,
        "jobsearcher": true,
        "notebookId": 0,
        "multiUserId": 0,
        "firstName": "John",
        "lastName": "Doe",
        "stateId": "123"
        }
     *
     * @return mixed
     */
    public function login()
    {
        return $this->execute('GET'. '/'. self::LOGIN);
    }
}