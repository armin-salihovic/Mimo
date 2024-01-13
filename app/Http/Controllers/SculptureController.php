<?php

namespace App\Http\Controllers;

use App\Repositories\ArchitectureRepository;
use App\Repositories\DesignRepository;
use App\Repositories\SculptureRepository;
use App\Services\SettingService;
use App\Traits\Seo;
use Illuminate\Http\Request;

class SculptureController extends Controller
{
    use Seo;

    private $settings;

    public function __construct(SculptureRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $sculptures = $this->repository->all();

        $this->settings = SettingService::getSettings('sculpture.page');

        return view('sculpture', [
            'sculptures' => $sculptures,
            'meta' => $this->getMetadata()
        ]);
    }
}
