<?php

namespace App\View\Components\Twill\Blocks\Page;

use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Radios;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Image extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.page.image');
    }

    public function getForm(): Form
    {
        return Form::make([
            Medias::make()
                ->name('image')
                ->label(twillTrans('Image')),
            Radios::make()
                ->name('orientation')
                ->inline()
                ->border()
                ->options(
                    Options::make([
                        Option::make('landscape', 'landscape'),
                        Option::make('portrait', 'portrait'),
                    ])
                )
        ]);
    }

    public static function getBlockGroup(): string
    {
        return 'page';
    }

    public static function getBlockIcon(): string
    {
        return 'image';
    }

    public static function getCrops(): array
    {
        return [
            'image' => [
                'landscape' => [
                    [
                        'name' => 'landscape',
                        'ratio' => 5 / 4,
                    ],
                ],
                'portrait' => [
                    [
                        'name' => 'portrait',
                        'ratio' => 4 / 5,
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
