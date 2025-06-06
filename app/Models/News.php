<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class News extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'content_kicker',
        'publish_start_date',
        'publish_end_date',
    ];

    public $translatedAttributes = [
        'title',
        'description',
        'active',
        'content_kicker',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $casts = [
        'publish_start_date' => 'datetime',
        'publish_end_date' => 'datetime'
    ];

    public $mediasParams = [
        'cover' => [
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

    public function getDate(): string
    {
        return date('F d, Y', strtotime($this->publish_start_date));
    }

    public function getAspectRatioFormatted(string $role, string $crop = 'default'): string
    {
        $width = $this->imageAsArray($role, $crop)['width'];
        $height = $this->imageAsArray($role, $crop)['height'];
        return "$width/$height";
    }
}
