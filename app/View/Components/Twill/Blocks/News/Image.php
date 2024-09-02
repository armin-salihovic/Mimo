<?php

namespace App\View\Components\Twill\Blocks\News;

use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Form;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Image extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.news.image');
    }

    public function getForm(): Form
    {
        return Form::make([
            Medias::make()
                ->name('news-image')
                ->label(twillTrans('Image'))
                ->max(5)
        ]);
    }

    public static function getBlockGroup(): string
    {
        return 'news';
    }

    public static function getBlockIcon(): string
    {
        return 'image';
    }

    public static function getCrops(): array
    {
        return [
            'news-image' => [
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
            ]
        ];
    }
}
