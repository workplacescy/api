<?php

declare(strict_types=1);

use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Location;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use App\Enums\Size;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('places', static function (Blueprint $table): void {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name')->index();
            $table->text('description')->index()->nullable();
            //$table->text('description')->fulltext()->nullable();
            $table->enum('type', Type::values())->index();
            $table->enum('city', City::values())->index();
            $table->string('place_id');
            $table->string('address');
            $table->string('latitude', 20)->index();
            $table->string('longitude', 20)->index();
            $table->string('url');
            $table->enum('sockets', Sockets::values())->index();
            $table->enum('size', Size::values())->index();
            $table->enum('location', Location::values())->index();
            $table->enum('busyness', Busyness::values())->index();
            $table->enum('view', View::values())->index();
            $table->integer('rank')->index()->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
