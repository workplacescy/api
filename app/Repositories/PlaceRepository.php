<?php

declare(strict_types=1);

namespace App\Repositories;

use A17\Twill\Models\Contracts\TwillModelContract;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Actions\UpdateDetails;
use App\Actions\UpdateVRate;
use App\Models\Place;

use function app;

final class PlaceRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(Place $model)
    {
        $this->model = $model;
    }


    public function afterSave(TwillModelContract $model, array $fields): void
    {
        (app()->make(UpdateDetails::class))($model);
        (app()->make(UpdateVRate::class))($model);

        parent::afterSave($model, $fields);
    }
}
