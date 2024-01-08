<?php

namespace App\View\Components\Twill\Blocks\Art;

use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Gallery extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.art.gallery');
    }
    public function getForm(): Form
    {
        return Form::make([
            Input::make()->name('title'),
            Medias::make()
                ->name('images')
                ->label(twillTrans('Images'))
                ->max(100)
        ]);
    }

    public static function getBlockGroup(): string
    {
        return 'art';
    }
}
