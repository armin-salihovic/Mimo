<?php

namespace App\Http\Controllers;

use App\Repositories\ArtRepository;
use App\Services\SettingService;
use App\Traits\Seo;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    use Seo;

    private ArtRepository $repository;
    private $settings;

    public function __construct(ArtRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        $this->settings = SettingService::getSettings('art.page');
        return $this->artView($this->repository->getFeaturedArt());
    }

    public function show($serial_number)
    {
        $art = $this->repository->getBySerialNumber($serial_number);
        abort_if(!$art, 404);

        $this->setTitle($serial_number);

        return $this->artView($this->repository->getFeaturedArt(), $art);
    }

    public function art1980()
    {
        $this->settings = SettingService::getSettings('art-1980.page');
        return $this->artDecadeView('get1980sArt');
    }

    public function art1990()
    {
        $this->settings = SettingService::getSettings('art-1990.page');
        return $this->artDecadeView('get1990sArt');
    }

    public function art2000()
    {
        $this->settings = SettingService::getSettings('art-2000.page');
        return $this->artDecadeView('get2000sArt');
    }

    public function art2010()
    {
        $this->settings = SettingService::getSettings('art-2010.page');
        return $this->artDecadeView('get2010sArt');
    }

    public function art2020()
    {
        $this->settings = SettingService::getSettings('art-2020.page');
        return $this->artDecadeView('get2020sArt');
    }

    public function art2020show($serial_number)
    {
        return $this->artDecadeView('get2020sArt', $serial_number);
    }

    public function art2010show($serial_number)
    {
        return $this->artDecadeView('get2010sArt', $serial_number);
    }

    public function art2000show($serial_number)
    {
        return $this->artDecadeView('get2000sArt', $serial_number);
    }

    public function art1990show($serial_number)
    {
        return $this->artDecadeView('get1990sArt', $serial_number);
    }

    public function art1980show($serial_number)
    {
        return $this->artDecadeView('get1980sArt', $serial_number);
    }

    private function artView($arts, $art = null)
    {
        return view('art', [
            'arts' => $arts,
            'artLinks' => $this->getArtLinks(),
            'art' => $art,
            'meta' => $this->getMetadata(),
        ]);
    }

    private function artDecadeView($artMethod, $serial_number = null)
    {
        $art = null;

        if($serial_number) {
            $art = $this->repository->getBySerialNumber($serial_number);
            abort_if(!$art, 404);
            $this->setTitle($serial_number);
        }

        $arts = $this->repository->{$artMethod}();

        return view('art-decade', [
            'arts' => $arts,
            'artLinks' => $this->getArtLinks(),
            'art' => $art,
            'meta' => $this->getMetadata(),
        ]);
    }

    private function getArtLinks(): array
    {
        return [
            'art' => 'Selected Works',
            'art.2020' => '2020s',
            'art.2010' => '2010s',
            'art.2000' => '2000s',
            'art.1990' => '1990s',
            'art.1980' => '1980s',
//            ['route' => 'art', 'name' => 'Selected Works'],
//            ['route' => 'art.2020', 'name' => '2020s'],
//            ['route' => 'art.2010', 'name' => '2010s'],
//            ['route' => 'art.2000', 'name' => '2000s'],
//            ['route' => 'art.1990', 'name' => '1990s'],
//            ['route' => 'art.1980', 'name' => '1980s'],
        ];
    }
}
