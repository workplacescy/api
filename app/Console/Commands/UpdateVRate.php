<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Actions\UpdateVRate as UpdateVRateAction;
use App\Models\Place;
use Illuminate\Console\Command;

final class UpdateVRate extends Command
{
    /** @inheritdoc */
    protected $signature = 'update:vrate {--f|force}';

    /** @inheritdoc */
    protected $description = 'Update vRate';


    public function handle(UpdateVRateAction $updateVRateAction): int
    {
        $places = $this->option('force') ? Place::all() : Place::whereNull('v_rate');

        $places->each(static function (Place $place) use ($updateVRateAction): void {
            $updateVRateAction($place);
        });

        return 0;
    }
}
