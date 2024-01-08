<?php

namespace App\View\Components\Twill\Blocks\Architecture;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Paragraph extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.architecture.paragraph');
    }

    public function getForm(): Form
    {
        return Form::make([
            Wysiwyg::make()->name('text')
        ]);
    }

    public static function getBlockGroup(): string
    {
        return 'arch';
    }
}
