<?php

namespace App\Http\Controllers;

use App\Repositories\NewsRepository;
use App\Traits\Seo;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use Seo;

    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('pages.news.index', [
            'news' => $this->repository->allNews(),
            'meta' => $this->getMetadata('news'),
        ]);
    }

    public function show($slug)
    {
        $news = $this->repository->forSlug($slug);

        if (!$news) abort(404);

        return view('pages.news.details', [
            'news' => $news,
            'meta' => [
                'title' => $news->title . ' | Emir Salihović Mimo',
                'description' => $news->description,
                'thumbnail' => $news->image('cover') . '&width=750',
            ]
        ]);
    }
}
