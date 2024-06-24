<?php

namespace App\Repositories;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Art;

class ArtRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(Art $model)
    {
        $this->model = $model;
    }

    public function getFeaturedArt()
    {
        $art = $this->model->where('featured', true)->orderBy('position')->latest();
        return $art->get();
    }

    public function get1980sArt()
    {
        $art = $this->model
                    ->where('year', '>=', 1980)
                    ->where('year', '<=', 1989)
                    ->orderBy('year', 'desc')
                    ->orderBy('position')
                    ->latest();

        return $art->get();
    }

    public function get1990sArt()
    {
        $art = $this->model
                    ->where('year', '>=', 1990)
                    ->where('year', '<=', 1999)
                    ->orderBy('year', 'desc')
                    ->orderBy('position')
                    ->latest();

        return $art->get();
    }

    public function get2000sArt()
    {
        $art = $this->model
                    ->where('year', '>=', 2000)
                    ->where('year', '<=', 2009)
                    ->orderBy('year', 'desc')
                    ->orderBy('position')
                    ->latest();

        return $art->get();
    }

    public function get2010sArt()
    {
        $art = $this->model
                    ->where('year', '>=', 2010)
                    ->where('year', '<=', 2019)
                    ->orderBy('year', 'desc')
                    ->orderBy('position')
                    ->latest();

        return $art->get();
    }


    public function get2020sArt()
    {
        $art = $this->model
                    ->where('year', '>=', 2020)
                    ->where('year', '<=', 2029)
                    ->orderBy('year', 'desc')
                    ->orderBy('position')
                    ->latest();

        return $art->get();
    }

    public function getBySerialNumber($serialNumber)
    {
        return $this->model
            ->where('serial_number', $serialNumber)
            ->first();
    }

    public function prepareFieldsBeforeSave(TwillModelContract $object, array $fields): array
    {
        if (self::isSerialNumberDirty($object, $fields)) {
            $fields['serial_number'] = self::generateSerialNumber($fields);
        }

        return parent::prepareFieldsBeforeSave($object, $fields);
    }

    private static function generateSerialNumber($fields): string
    {
        $year = $fields['year'];
        $width = (int)$fields['width'];
        $height = (int)$fields['height'];

        $serialNumberPart = "M-" . $year . "-" . $width . "-" . $height . "-";

        return $serialNumberPart . self::getNextNumber($serialNumberPart);
    }

    private static function getNextNumber($snPart): int
    {
        $arts = Art::where('serial_number', 'like', '%' . $snPart . '%')->get();
        $numbers = [];
        foreach ($arts as $art) {
            $numbers[] = ArtRepository::getNumber($art->serial_number, $snPart);
        }
        sort($numbers);
        return end($numbers) + 1;
    }

    private static function getNumber($sn): int
    {
        $sn = strrev($sn);
        $n = '';
        for($i = 0; $i < strlen($sn); $i++) {
            if($sn[$i] === '-') break;
            $n .= $sn[$i];
        }
        $n = strrev($n);
        return (int)$n;
    }

    private static function isSerialNumberDirty(Art $art, $fields)
    {
        return
            $art->year !== $fields['year'] ||
            $art->width !== (int)$fields['width'] ||
            $art->height !== (int)$fields['height'];
    }

}
