<?php

declare(strict_types=1);

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;
use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Services\Listings\Columns\Text;
use A17\Twill\Services\Listings\Filters\BasicFilter;
use A17\Twill\Services\Listings\Filters\TableFilters;
use A17\Twill\Services\Listings\TableColumns;
use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Cuisine;
use App\Enums\Noise;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use Illuminate\Database\Eloquent\Builder;

final class PlaceController extends BaseModuleController
{
    /** @inheritdoc */
    protected $moduleName = 'places';

    /** @inheritdoc */
    protected $formWith = ['medias.tags'];


    protected function setUpController(): void
    {
        parent::setUpController();

        $this->disableIncludeScheduledInList();
        $this->disablePermalink();
        $this->enableDuplicate();
        $this->enableSkipCreateModal();
    }


    protected function getIndexTableColumns(): TableColumns
    {
        return parent::getIndexTableColumns()
            ->add(Text::make()->field('type')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->type->value))
            ->add(Text::make()->field('city')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->city->value))
            ->add(Text::make()->field('sockets')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->sockets->value))
            ->add(Text::make()->field('noise')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->noise->value))
            ->add(Text::make()->field('size')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->size->value))
            ->add(Text::make()->field('busyness')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->busyness->value))
            ->add(Text::make()->field('view')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->view->value))
            ->add(Text::make()->field('cuisine')->sortable()->customRender(static fn (TwillModelContract $model): string => $model->cuisine->value))
            ->add(Text::make()->field('v_rate')->sortable()->customRender(static fn (TwillModelContract $model): string => (string) $model->v_rate))
            ->add(Text::make()->field('wifi_name')->sortable())
            ->add(Text::make()->field('wifi_password')->sortable());
    }


    public function filters(): TableFilters
    {
        return TableFilters::make([
            BasicFilter::make()->queryString('type')->options(collect(Type::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('type', $value);
            }),
            BasicFilter::make()->queryString('city')->options(collect(City::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('city', $value);
            }),
            BasicFilter::make()->queryString('sockets')->options(collect(Sockets::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('sockets', $value);
            }),
            BasicFilter::make()->queryString('noise')->options(collect(Noise::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('noise', $value);
            }),
            BasicFilter::make()->queryString('size')->options(collect(Size::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('size', $value);
            }),
            BasicFilter::make()->queryString('busyness')->options(collect(Busyness::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('busyness', $value);
            }),
            BasicFilter::make()->queryString('view')->options(collect(View::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('view', $value);
            }),
            BasicFilter::make()->queryString('cuisine')->options(collect(Cuisine::casesValues()))->apply(static function (Builder $builder, string $value): void {
                $builder->where('cuisine', $value);
            }),
        ]);
    }


    /** @inheritdoc */
    protected function formData($request): array
    {
        return [
            'types' => [
                'options' => Type::valuesLabels(),
                'default' => Type::defaultValue(),
            ],
            'cities' => [
                'options' => City::valuesLabels(),
                'default' => City::defaultValue(),
            ],
            'sockets' => [
                'options' => Sockets::valuesLabels(),
                'default' => Sockets::defaultValue(),
            ],
            'noises' => [
                'options' => Noise::valuesLabels(),
                'default' => Noise::defaultValue(),
            ],
            'sizes' => [
                'options' => Size::valuesLabels(),
                'default' => Size::defaultValue(),
            ],
            'busynesses' => [
                'options' => Busyness::valuesLabels(),
                'default' => Busyness::defaultValue(),
            ],
            'views' => [
                'options' => View::valuesLabels(),
                'default' => View::defaultValue(),
            ],
            'cuisines' => [
                'options' => Cuisine::valuesLabels(),
                'default' => Cuisine::defaultValue(),
            ],
            'reloadOnSuccess' => true,
        ];
    }
}
