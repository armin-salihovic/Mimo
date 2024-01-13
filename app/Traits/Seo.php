<?php

namespace App\Traits;

use App\Services\SettingService;

trait Seo
{

    private string $title = '';
    private string $description = '';
    private string $thumbnail = '';

    public function getTitle(): string
    {
        if ($this->title !== '') {
            return $this->title;
        } else if (isset(SettingService::getMetadata($this->settings)['title'])) {
            return SettingService::getMetadata($this->settings)['title'];
        }
        return SettingService::getDefaultTitle();
    }

    public function getDescription(): string
    {
        if ($this->description !== '') {
            return $this->description;
        } else if (isset(SettingService::getMetadata($this->settings)['description'])) {
            return SettingService::getMetadata($this->settings)['description'];
        }
        return SettingService::getDefaultDescription();
    }

    public function getThumbnail(): string
    {
        return SettingService::getThumbnail($this->settings);
    }

    public function setTitle($title = null): void
    {
        $this->title = $title;
    }

    public function setDescription($description = null): void
    {
        $this->description = $description;
    }

    public function getMetadata($prefix = true): array
    {
        return [
            'title' => $this->getTitle() . ($prefix ? ' | ' . SettingService::getDefaultTitle() : ''),
            'description' => $this->getDescription(),
            'thumbnail' => $this->getThumbnail(),
        ];
    }
}
