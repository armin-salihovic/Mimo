<?php

namespace App\Http\Controllers;

use App\Repositories\ArchitectureRepository;
use App\Traits\Seo;
use Illuminate\Http\Request;

class ArchitectureController extends Controller
{
    use Seo;

    public function __construct(ArchitectureRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $architectures = $this->repository->all();

        return view('pages.architecture.index', [
            'architectures' => $architectures,
            'meta' => $this->getMetadata('architecture')
        ]);
    }

    public function show($slug)
    {
        $architecture = $this->repository->forSlug($slug);

        if (!$architecture) abort(404);

        return view('pages.architecture.details', compact('architecture'));
    }
}
