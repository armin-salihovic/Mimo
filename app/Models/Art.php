<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Art extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'year',
        'height',
        'width',
        'status',
        'serial_number',
        'price',
        'featured',
        'technique',
    ];

    public $slugAttributes = [
        'serial_number',
    ];

    public $mediasParams = [
        'image' => [
            'free' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
            ],
            'featured' => [
                [
                    'name' => 'featured',
                    'ratio' => 4 / 3,
                ],
            ],
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function getAspectRatioFormatted(string $role, string $crop = 'default'): string
    {
        if (!$this->hasImage($role)) return '';

        $width = $this->imageAsArray($role, $crop)['width'];
        $height = $this->imageAsArray($role, $crop)['height'];
        return "$width/$height";
    }

    public function generateTitle(): string
    {
        return ($this->technique ?? "Painting") . ", " . $this->width . "x" . "$this->height" . "cm, " . "$this->year" . ".";
    }
}
