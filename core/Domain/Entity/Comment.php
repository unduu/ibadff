<?php


namespace Ibadf\Domain\Entity;

use Ibadf\Domain\Entity\User;

class Comment
{
    private $user;
    private $content;

    /**
     * Comment constructor.
     * @param $user
     * @param $content
     */
    public function __construct(User $user, $content)
    {
        $this->user = $user;
        $this->content = $content;
    }
}
