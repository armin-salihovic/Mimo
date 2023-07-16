<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct(NewsRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $news = $this->repository->allNews();

        return view('news', compact('news'));
    }

    public function show($slug)
    {
        $news = $this->repository->forSlug($slug);

        if (!$news) abort(404);

        return view('news-details', compact('news'));
    }
}
