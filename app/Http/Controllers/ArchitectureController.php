<?php

namespace App\Http\Controllers;

use App\Repositories\ArchitectureRepository;
use Illuminate\Http\Request;

class ArchitectureController extends Controller
{

    public function __construct(ArchitectureRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $architectures = $this->repository->all();

        return view('architecture.index', compact('architectures'));
    }

    public function show($slug)
    {
        $architecture = $this->repository->forSlug($slug);

        if (!$architecture) abort(404);

        return view('architecture.architecture-details', compact('architecture'));
    }
}
