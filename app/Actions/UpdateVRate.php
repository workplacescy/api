<?php

declare(strict_types=1);

namespace App\Actions;

use A17\Twill\Models\Contracts\TwillModelContract;
use App\Models\Place;
use App\Services\VRateService;

final class UpdateVRate
{
    public function __construct(private readonly VRateService $vRateService)
    {
    }


    public function __invoke(Place|TwillModelContract $place): void
    {
        $place->v_rate = ($this->vRateService)($place);

        $place->save();
    }
}
