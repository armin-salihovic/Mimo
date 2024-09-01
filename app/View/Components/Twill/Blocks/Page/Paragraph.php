<?php

namespace App\View\Components\Twill\Blocks\Page;

use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\View\Components\Blocks\TwillBlockComponent;
use Illuminate\Contracts\View\View;

class Paragraph extends TwillBlockComponent
{
    public function render(): View
    {
        return view('components.twill.blocks.page.paragraph');
    }

    public function getForm(): Form
    {
        return Form::make([
            Wysiwyg::make()->name('text')->translatable(),
        ]);
    }

    public static function getBlockGroup(): string
    {
        return 'page';
    }

    public static function getBlockIcon(): string
    {
        return 'text';
    }
}
