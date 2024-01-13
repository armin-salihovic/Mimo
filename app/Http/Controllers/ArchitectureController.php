<?php

namespace App\Http\Controllers;

use App\Repositories\ArchitectureRepository;
use App\Services\SettingService;
use App\Traits\Seo;
use Illuminate\Http\Request;

class ArchitectureController extends Controller
{
    use Seo;

    private $settings;

    public function __construct(ArchitectureRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $architectures = $this->repository->all();

        $this->settings = SettingService::getSettings('architecture.page');

        return view('architecture.index', [
            'architectures' => $architectures,
            'meta' => $this->getMetadata()
        ]);
    }

    public function show($slug)
    {
        $architecture = $this->repository->forSlug($slug);

        if (!$architecture) abort(404);

        return view('architecture.architecture-details', compact('architecture'));
    }
}
