<?php

namespace App\Http\Controllers;

use App\Repositories\SculptureRepository;
use App\Traits\Seo;
use Illuminate\Http\Request;

class SculptureController extends Controller
{
    use Seo;

    public function __construct(SculptureRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return view('pages.sculpture.index', [
            'sculptures' => $this->repository->all(),
            'meta' => $this->getMetadata('sculpture')
        ]);
    }

    public function show($slug)
    {
        $sculpture = $this->repository->forSlug($slug);

        if (!$sculpture) abort(404);

        return view('pages.sculpture.details', [
            'sculpture' => $sculpture,
            'meta'      => $this->getMetadataDetail($sculpture)
        ]);
    }
}
