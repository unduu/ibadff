<?php


namespace Ibadf\Persistence\Eloquent\Repository;


use Ibadf\Domain\Repository\NewsRepositoryInterface;
use Ibadf\Domain\Entity\News;
use Illuminate\Database\DatabaseManager;


class NewsRepository implements NewsRepositoryInterface
{
    private $db;

    /**
     * NewsRepository constructor.
     * @param $db
     */
    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $rows = $this->db->connection()->table("news")->get();

        $entities = [];
        foreach ($rows as $row) {
            $entity = new News($row->id, $row->news_title, $row->news_published, $row->news_image, $row->news_preview);
            $entities[] = $entity;
        }

        return $entities;
    }


}
