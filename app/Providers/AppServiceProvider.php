<?php

declare(strict_types=1);

namespace App\Providers;

use App\Http\Resources\PlaceResource;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        //Model::preventLazyLoading(); // TODO Wait for Twill media library
        //Model::preventSilentlyDiscardingAttributes(); // TODO Wait for Twill
        //Model::preventAccessingMissingAttributes(); // TODO Wait for Twill
        //Model::shouldBeStrict(); // TODO Wait for Twill

        PlaceResource::withoutWrapping();
    }
}
