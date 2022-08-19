<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Actions\UpdateDetails as UpdateDetailsAction;
use App\Models\Place;
use Illuminate\Console\Command;

final class UpdateDetails extends Command
{
    /** @inheritdoc */
    protected $signature = 'update:details {--f|force}';

    /** @inheritdoc */
    protected $description = 'Update details from Google Places API';


    public function handle(UpdateDetailsAction $updateDetailsAction): int
    {
        $places = $this->option('force') ? Place::all() : Place::whereNull('place_id');

        $places->each(static function (Place $place) use ($updateDetailsAction): void {
            $updateDetailsAction($place);
        });

        return 0;
    }
}
