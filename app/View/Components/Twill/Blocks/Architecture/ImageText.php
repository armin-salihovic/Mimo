<?php

namespace App\View\Components\Twill\Blocks\Architecture;

use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class ImageText extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.architecture.image-text');
    }

    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title')->translatable(),
            Input::make()->name('status')->translatable(),
            Input::make()->name('location')->translatable(),
            Input::make()->name('start_year'),
            Input::make()->name('end_year'),
            Wysiwyg::make()->name('text')->translatable(),
            Medias::make()
                ->name('blockImages')
                ->label(twillTrans('Image'))
                ->max(20)
                ->extraMetadatas([
                    [
                        'name' => 'frame',
                        'label' => 'Frame',
                        'type' => 'checkbox',
                    ],
                ]),
        ]);
    }

    public static function getBlockGroup(): string
    {
        return 'arch';
    }

    public static function getCrops(): array
    {
        return [
            'blockImages' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 239/100,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],
                'free' => [
                    [
                        'name' => 'free',
                        'ratio' => 0,
                    ],
                ],
            ]
        ];
    }

}
