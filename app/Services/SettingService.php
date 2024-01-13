<?php

namespace App\Services;

use A17\Twill\Models\Block;

class SettingService
{
    public static function getSettings($name, $content = [])
    {
        $settings = Block::where('type', 'appSettings.' . $name)->first();

        return self::getBlocks($settings);
    }

    public static function getBlocks($block, &$content = [])
    {
        $arr = [
            'content' => $block->content,
            'block' => $block,
        ];

        $content[] = $arr;

        if (count($block->children) > 0) {
            $content['children'] = [];
            foreach ($block->children as $childBlock) {
                self::getBlocks($childBlock, $content['children']);
            }
        }

        return $content;
    }

    public static function getMetadata($settings): array
    {
        return $settings !== null ? $settings[0]['content'] : self::getDefaultValues();
    }

    public static function getThumbnail($settings): string
    {
        return $settings !== null && $settings[0]['block'] ? $settings[0]['block']->image('thumbnail') . '&width=750' : '';
    }

    public static function getDefaultValues(): array
    {
        $content = [
            'content' => [
                'title' => self::getDefaultTitle(),
                'description' => self::getDefaultDescription(),
            ],
            'block' => null,
        ];
        return [$content];
    }

    public static function getDefaultTitle(): string
    {
        return 'Emir Mimo Salihović';
    }

    public static function getDefaultDescription(): string
    {
        return 'Emir Salihović Mimo is an architect, painter, sculptor, and designer. He teaches at the Academy of Fine Arts in Sarajevo.';
    }
}
