<?php


namespace Ibadf\Domain\Entity;


class User
{
    private $username;
    private $avatar;

    /**
     * User constructor.
     * @param $username
     * @param $avatar
     */
    public function __construct($username, $avatar)
    {
        $this->username = $username;
        $this->avatar = $avatar;
    }
}
