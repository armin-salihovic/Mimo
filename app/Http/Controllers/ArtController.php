<?php

namespace App\Http\Controllers;

use App\Enums\ArtStatus;
use App\Repositories\ArtRepository;
use App\Traits\Seo;
use Illuminate\Http\Request;

class ArtController extends Controller
{
    use Seo;

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

        $this->setTitle($serial_number);

        return $this->artView($this->repository->getFeaturedArt(), $art);
    }

    public function art1980()
    {
        return $this->artDecadeView('get1980sArt', 'art-1980');
    }

    public function art1990()
    {
        return $this->artDecadeView('get1990sArt', 'art-1990');
    }

    public function art2000()
    {
        return $this->artDecadeView('get2000sArt', 'art-2000');
    }

    public function art2010()
    {
        return $this->artDecadeView('get2010sArt', 'art-2010');
    }

    public function art2020()
    {
        return $this->artDecadeView('get2020sArt', 'art-2020');
    }

    public function art2020show($serial_number)
    {
        return $this->artDecadeView('get2020sArt','art-2020', $serial_number);
    }

    public function art2010show($serial_number)
    {
        return $this->artDecadeView('get2010sArt', 'art-2010', $serial_number);
    }

    public function art2000show($serial_number)
    {
        return $this->artDecadeView('get2000sArt', 'art-2000', $serial_number);
    }

    public function art1990show($serial_number)
    {
        return $this->artDecadeView('get1990sArt', 'art-1990', $serial_number);
    }

    public function art1980show($serial_number)
    {
        return $this->artDecadeView('get1980sArt', 'art-1980', $serial_number);
    }

    private function artView($arts, $art = null)
    {
        self::formatArtStatuses($arts, $art);

        if ($art) {
            $meta['title'] = $art->serial_number . ' | ' . 'Emir Salihović Mimo';
            $meta['description'] = 'A painting by Emir Salihović Mimo from the year ' . $art->year . ' with a serial number ' . $art->serial_number . '.';
            $meta['thumbnail'] = $art->socialImage('image');
        } else {
            $meta = $this->getMetadata('art');
        }

        return view('pages.art.index', [
            'art' => $art,
            'arts' => $arts,
            'artLinks' => self::getArtLinks(),
            'meta' => $meta,
        ]);
    }

    private function artDecadeView($artMethod, $group, $serial_number = null)
    {
        $art = null;

        if($serial_number) {
            $art = $this->repository->getBySerialNumber($serial_number);
            abort_if(!$art, 404);
            $this->setTitle($serial_number);
        }

        $arts = $this->repository->{$artMethod}();

        self::formatArtStatuses($arts, $art);

        if ($art) {
            $meta['title'] = $art->serial_number . ' | ' . 'Emir Salihović Mimo';
            $meta['description'] = 'A painting by Emir Salihović Mimo from the year ' . $art->year . ' with a serial number ' . $serial_number . '.';
            $meta['thumbnail'] = $art->socialImage('image');
        } else {
            $meta = $this->getMetadata($group);
        }

        return view('pages.art.decade', [
            'art' => $art,
            'arts' => $arts,
            'artLinks' => self::getArtLinks(),
            'meta' => $meta,
        ]);
    }

    private static function getArtLinks(): array
    {
        return [
            'art' => [
                'name' => 'Selected Works',
                'show_nav' => true,
                'route_detail' => 'art.show'
            ],
            'art.2020' => [
                'name' => '2020s',
                'show_nav' => true,
                'route_detail' => 'art.2020.show',
            ],
            'art.2010' => [
                'name' => '2010s',
                'show_nav' => true,
                'route_detail' => 'art.2010.show',
            ],
            'art.2000' => [
                'name' => '2000s',
                'show_nav' => true,
                'route_detail' => 'art.2000.show',
            ],
            'art.1990' => [
                'name' => '1990s',
                'show_nav' => true,
                'route_detail' => 'art.1990.show',
            ],
            'art.1980' => [
                'name' => '1980s',
                'show_nav' => true,
                'route_detail' => 'art.1980.show',
            ],
            'art.show' => [
                'name' => 'Selected Works',
                'show_nav' => false,
                'route_detail' => '',
            ],
            'art.2020.show' => [
                'name' => '2020s',
                'show_nav' => false,
                'route_detail' => '',
            ],
            'art.2010.show' => [
                'name' => '2010s',
                'show_nav' => false,
                'route_detail' => '',
            ],
            'art.2000.show' => [
                'name' => '2000s',
                'show_nav' => false,
                'route_detail' => '',
            ],
            'art.1990.show' => [
                'name' => '1990s',
                'show_nav' => false,
                'route_detail' => '',
            ],
            'art.1980.show' => [
                'name' => '1980s',
                'show_nav' => false,
                'route_detail' => '',
            ],
        ];
    }

    private static function artStatusToName(?int $artStatusInt)
    {
        $artStatus = $artStatusInt ? ArtStatus::tryFrom($artStatusInt) : 'No Information';

        return match ($artStatus) {
            ArtStatus::AVAILABLE => "Available",
            ArtStatus::NOT_AVAILABLE => "Not Available",
            ArtStatus::SOLD => "Sold",
            default => 'No Information',
        };
    }

    private static function formatArtStatuses(&$arts, $art)
    {
        $arts = $arts->map(function ($art) {
            $art['status'] = self::artStatusToName($art->status);
            $art['size'] = $art->width . 'x' . $art->height . 'cm';
            return $art;
        });

        if ($art != null) {
            $art->status = self::artStatusToName($art->status);
            $art['size'] = $art->width . 'x' . $art->height . 'cm';
        }
    }
}
