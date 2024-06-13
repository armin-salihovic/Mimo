<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\BlockEditor;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Wysiwyg;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ArchitectureController extends BaseModuleController
{
    protected $moduleName = 'architectures';
    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Input::make()->name('description')->label('Description')
        );

        $form->add(
            Wysiwyg::make()
                ->name('intro')
                ->toolbarOptions([ [ 'header' => [1, 2, false] ], 'ordered', 'bullet' ])
                ->maxLength(600)
                ->note('Intro')
        );

        $form->add(
            Input::make()->name('status')->label('Status')
        );

        $form->add(
            Input::make()->name('start_year')->label('Start year')
        );

        $form->add(
            Input::make()->name('end_year')->label('End year')
        );

        $form->add(
            Input::make()->name('location')->label('Location')
        );

        $form->add(
            Medias::make()
                ->name('cover')
                ->label(twillTrans('Cover image'))
        );

//        $form->add(
//            BlockEditor::make()
//                ->blocks(['app-image', 'arch-paragraph'])
//        );

        $form->add(
            Medias::make()
                ->name('images')
                ->label(twillTrans('Images'))
                ->max(20)
        );

        return $form;
    }

    /**
     * This is an example and can be removed if no modifications are needed to the table.
     */
    protected function additionalIndexTableColumns(): TableColumns
    {
        $table = parent::additionalIndexTableColumns();

        $table->add(
            Text::make()->field('description')->title('Description')
        );

        return $table;
    }
}
