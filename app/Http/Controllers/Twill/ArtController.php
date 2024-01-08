<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Forms\Fields\Checkbox;
use A17\Twill\Services\Forms\Fields\Medias;
use A17\Twill\Services\Forms\Fields\Select;
use A17\Twill\Services\Forms\Option;
use A17\Twill\Services\Forms\Options;
use A17\Twill\Services\Listings\Columns\Image;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\Filters\FieldSelectFilter;
use A17\Twill\Services\Listings\Filters\QuickFilter;
use A17\Twill\Services\Listings\Filters\TableFilters;
use A17\Twill\Services\Listings\TableColumns;
use A17\Twill\Services\Forms\Fields\Input;
use A17\Twill\Services\Forms\Form;
use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use App\Enums\ArtStatus;
use App\Models\Art;
use Illuminate\Database\Eloquent\Builder;

class ArtController extends BaseModuleController
{
    protected $moduleName = 'art';

    protected $indexOptions = [
        'reorder' => true,
    ];

    /**
     * This method can be used to enable/disable defaults. See setUpController in the docs for available options.
     */
    protected function setUpController(): void
    {
        $this->disablePermalink();
    }

    /**
     * See the table builder docs for more information. If you remove this method you can use the blade files.
     * When using twill:module:make you can specify --bladeForm to use a blade form instead.
     */
    public function getForm(TwillModelContract $model): Form
    {
        $form = parent::getForm($model);

        $form->add(
            Medias::make()
                ->name('image')
                ->label(twillTrans('Image'))
        );

        $form->add(
            Input::make()->name('year')->label('Year')
        );

        $form->add(
            Input::make()->name('height')->label('Height')
        );

        $form->add(
            Input::make()->name('width')->label('Width')
        );

        $form->add(
            Input::make()->name('price')->label('Price')
        );

        $form->add(
            Checkbox::make()
                ->name('featured')
                ->label('Featured')
        );

        $form->add(
            Select::make()
                ->name('status')
                ->options(
                    Options::make([
                        Option::make(ArtStatus::AVAILABLE->value, 'Available'),
                        Option::make(ArtStatus::NOT_AVAILABLE->value, 'Sold'),
                        Option::make(ArtStatus::SOLD->value, 'Sold'),
                    ])
                )
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

    public function getCreateForm(): Form
    {
        return Form::make([
            Input::make()
                ->name('year')
                ->label('Year')
                ->onChange('formatPermalink'),
            Input::make()
                ->name('height')
                ->label('Height')
                ->onChange('formatPermalink'),
            Input::make()
                ->name('width')
                ->label('Width')
                ->onChange('formatPermalink'),
        ]);

    }

    protected function getIndexTableColumns(): TableColumns
    {
        $columns = new TableColumns();

        $columns->add(
            Image::make()
                ->field('image')
                ->title('Image')
        );

        $columns->add(
            Text::make()
                ->field('serial_number')
                ->title(twillTrans('Serial Number'))
                ->linkToEdit()
        );

        $columns->add(
            Text::make()
                ->field('year')
                ->title(twillTrans('Year'))
        );

        $columns->add(
            Text::make()
                ->field('height')
                ->title(twillTrans('Height'))
        );

        $columns->add(
            Text::make()
                ->field('width')
                ->title(twillTrans('Width'))
        );

        $columns->add(
            Text::make()
                ->field('status')
                ->customRender(function (Art $art) {
                    return match ($art->status) {
                        ArtStatus::AVAILABLE->value => "Available",
                        ArtStatus::NOT_AVAILABLE->value => "Not Available",
                        ArtStatus::SOLD->value => "Sold",
                        default => "N/I",
                    };
                })
        );

        $columns->add(
            Text::make()
                ->field('Featured')
                ->customRender(function (Art $model) {
                    return view('components.twill.is-featured', ['featured' => $model->featured])->render();
            })
        );

        $columns->add(
            Text::make()
                ->field('title')
                ->title(twillTrans('Title'))
        );

        return $columns;
    }

    public function filters(): TableFilters
    {
        return TableFilters::make([
            FieldSelectFilter::make()->field('year'),
        ]);
    }

    public function quickFilters(): \A17\Twill\Services\Listings\Filters\QuickFilters
    {
        $filters = $this->getDefaultQuickFilters();

        $filters->add(
            QuickFilter::make()
                ->queryString('Featured')
                ->label('Featured')
                ->amount(fn() => $this->repository->where('featured', true)->count())
                ->apply(fn(Builder $builder) => $builder->where('featured', true))
        );

        $filters->add(
            QuickFilter::make()
                ->queryString('Available')
                ->label('Available')
                ->amount(fn() => $this->repository->where('status', ArtStatus::AVAILABLE->value)->count())
                ->apply(fn(Builder $builder) => $builder->where('status', ArtStatus::AVAILABLE->value))
        );

        return $filters;
    }
}
