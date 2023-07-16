<?php

namespace App\View\Components\Twill\Blocks\News;

use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
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
                ->name('image')
                ->label(twillTrans('Image'))
                ->max(5)
        ]);
    }
}
