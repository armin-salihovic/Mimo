<?php

namespace App\Traits;

use A17\Twill\Facades\TwillAppSettings;

trait Seo
{
    private ?string $title = null;

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getMetadata(string $group, $prefix = true): array
    {
        $title = $this->title ?? TwillAppSettings::getTranslated("{$group}.page.title");
        $description = TwillAppSettings::getTranslated("{$group}.page.description");
        $block = TwillAppSettings::getGroupDataForSectionAndName("{$group}", 'page');

        return [
            'title' => $title . ($prefix ? ' | ' . 'Emir Salihović Mimo' : ''),
            'description' => $description,
            'thumbnail' => $block->hasImage('thumbnail') ? $block->socialImage('thumbnail') : null,
        ];
    }
}
