<?php


namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Ibadf\Domain\Repository\NewsRepositoryInterface;

class NewsController extends Controller
{
    private $newsRepository;

    /**
     * News constructor.
     * @param $newsRepository
     */
    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function index()
    {
        $newsArr = $this->newsRepository->getAll();

        $dataArr = array();
        foreach ($newsArr as $newsObj) {
            $data = array(
                "id" => $newsObj->getId(),
                "title" => $newsObj->getTitle(),
                "published_date" => $newsObj->getPublishDate(),
                "image" => $newsObj->getImage(),
                "preview" => $newsObj->getPreview(),
                "total_like" => 20,
                "comments" => array(
                    array(
                        "username" => "WorldBlink",
                        "avatar" => "https=>//i.pravatar.cc/150?img=43",
                        "content" => "Thank you"
                    )
                )
            );
            $dataArr[] = $data;
        }

        return response()->json($dataArr);
    }
}
