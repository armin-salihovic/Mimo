<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;

class Sculpture extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'images' => [
            'free' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
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
        'thumbnail' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 4 / 5, // 16/9 for the other design
                ],
            ],
            'index' => [
                [
                    'name' => 'index',
                    'ratio' => 21 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function imageAsArray($role, $crop = 'default', $params = [], $media = null)
    {
        if ($media === null) {
            $media = $this->findMedia($role, $crop);
        }

        if ($media) {
            return [
                'src' => $this->image($role, $crop, $params, false, false, $media),
                'width' => $media->pivot->crop_w ?? $media->width,
                'height' => $media->pivot->crop_h ?? $media->height,
                'alt' => $this->imageAltText($role, $media),
                'caption' => $this->imageCaption($role, $media),
                'video' => $this->imageVideo($role, $media),
                'lqip'  => $media->pivot->lqip_data,
            ];
        }

        return [];
    }

    /**
     * Returns an array of meta information for all images attached for a role and crop.
     *
     * @param string $role Role name.
     * @param string $crop Crop name.
     * @param array $params Parameters compatible with the current image service, like `w` or `h`.
     * @return array
     */
    public function imagesAsArrays($role, $crop = 'default', $params = [])
    {
        $medias = $this->medias->filter(function ($media) use ($role, $crop) {
            return $media->pivot->role === $role && $media->pivot->crop === $crop;
        });

        $arrays = [];

        foreach ($medias as $media) {
            $arrays[] = $this->imageAsArray($role, $crop, $params, $media);
        }

        return $arrays;
    }

    public function imagesAsArraysWithCrops($role, $params = [])
    {
        $medias = $this->medias->filter(function ($media) use ($role) {
            return $media->pivot->role === $role;
        });

        $arrays = [];

        foreach ($medias as $media) {
            $paramsForCrop = $params[$media->pivot->crop] ?? [];
            $arrays[$media->id][$media->pivot->crop] = $this->imageAsArray(
                $role,
                $media->pivot->crop,
                $paramsForCrop,
                $media
            );
        }

        return $arrays;
    }
}
