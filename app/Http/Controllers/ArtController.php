<?php

namespace App\Http\Controllers;

use App\Repositories\ArtRepository;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    private ArtRepository $repository;

    public function __construct(ArtRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->artView($this->repository->getFeaturedArt());
    }

    public function show($serial_number)
    {
        $art = $this->repository->getBySerialNumber($serial_number);
        abort_if(!$art, 404);

        return $this->artView($this->repository->getFeaturedArt(), $art);
    }

    public function art1980()
    {
        return $this->artDecadeView('get1980sArt');
    }

    public function art1990()
    {
        return $this->artDecadeView('get1990sArt');
    }

    public function art2000()
    {
        return $this->artDecadeView('get2000sArt');
    }

    public function art2010()
    {
        return $this->artDecadeView('get2010sArt');
    }

    public function art2020()
    {
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
        ]);
    }

    private function artDecadeView($artMethod, $serial_number = null)
    {
        $art = null;

        if($serial_number) {
            $art = $this->repository->getBySerialNumber($serial_number);
            abort_if(!$art, 404);
        }

        $arts = $this->repository->{$artMethod}();

        return view('art-decade', [
            'arts' => $arts,
            'artLinks' => $this->getArtLinks(),
            'art' => $art,
        ]);
    }

    private function getArtLinks(): array
    {
        return [
            ['route' => route('art.2020'), 'name' => '2020s'],
            ['route' => route('art.2010'), 'name' => '2010s'],
            ['route' => route('art.2000'), 'name' => '2000s'],
            ['route' => route('art.1990'), 'name' => '1990s'],
            ['route' => route('art.1980'), 'name' => '1980s'],
        ];
    }
}
