<?php


namespace Ibadf\Domain\Entity;

use Ibadf\Domain\Entity\Comment;

class News
{
    private $id;
    private $title;
    private $publishDate;
    private $image;
    private $preview;
    private $comments;

    /**
     * News constructor.
     * @param $id
     * @param $title
     * @param $publishDate
     * @param $image
     * @param $preview
     */
    public function __construct($id, $title, $publishDate, $image, $preview)
    {
        $this->id = $id;
        $this->title = $title;
        $this->publishDate = $publishDate;
        $this->image = $image;
        $this->preview = $preview;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param mixed $publishDate
     */
    public function setPublishDate($publishDate): void
    {
        $this->publishDate = $publishDate;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getPreview()
    {
        return $this->preview;
    }

    /**
     * @param mixed $preview
     */
    public function setPreview($preview): void
    {
        $this->preview = $preview;
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param mixed $comments
     */
    public function setComments(Comment $comments): void
    {
        $this->comments = $comments;
    }
}
