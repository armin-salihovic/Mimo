<?php

namespace App\Http\Controllers;

use App\Repositories\DesignRepository;
use App\Traits\Seo;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    use Seo;

    public function __construct(DesignRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $designs = $this->repository->all();

        return view('pages.design.index', [
            'designs' => $designs,
            'meta' => $this->getMetadata('design')
        ]);
    }

    public function show($slug)
    {
        $design = $this->repository->forSlug($slug);

        if (!$design) abort(404);

        return view('pages.design.details', compact('design'));
    }
}
