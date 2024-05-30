<?php

namespace App\Http\Controllers;

use App\Repositories\ArchitectureRepository;
use App\Repositories\DesignRepository;
use App\Services\SettingService;
use App\Traits\Seo;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    use Seo;

    private $settings;

    public function __construct(DesignRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $designs = $this->repository->all();

//        $this->settings = SettingService::getSettings('design.page');

        return view('design', [
            'designs' => $designs,
            'meta' => $this->getMetadata()
        ]);
    }

    public function show($slug)
    {
        $design = $this->repository->forSlug($slug);

        if (!$design) abort(404);

        return view('design-details', compact('design'));
    }
}
