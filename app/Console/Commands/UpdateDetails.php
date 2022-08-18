<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Actions\UpdateDetails as UpdateDetailsAction;
use App\Models\Place;
use Illuminate\Console\Command;

class UpdateDetails extends Command
{
    protected $signature = 'update:details {--f|force}';

    protected $description = 'Update details from Google Places API';


    public function handle(UpdateDetailsAction $updateDetailsAction): int
    {
        $force = $this->option('force');

        if ($force) {
            $places = Place::all();
        } else {
            $places = Place::whereNull('place_id');
        }

        $places->each(function (Place $place) use ($updateDetailsAction): void {
            $updateDetailsAction($place);
        });

        return 0;
    }
}
