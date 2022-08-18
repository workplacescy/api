<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Actions\UpdateVRate as UpdateVRateAction;
use App\Models\Place;
use Illuminate\Console\Command;

class UpdateVRate extends Command
{
    protected $signature = 'update:vrate {--f|force}';

    protected $description = 'Update vRate';


    public function handle(UpdateVRateAction $updateVRateAction): int
    {
        $force = $this->option('force');

        if ($force) {
            $places = Place::all();
        } else {
            $places = Place::whereNull('v_rate');
        }

        $places->each(static function (Place $place) use ($updateVRateAction): void {
            $updateVRateAction($place);
        });

        return 0;
    }
}
