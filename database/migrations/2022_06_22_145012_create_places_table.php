<?php

declare(strict_types=1);

use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Noise;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
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
            $table->text('description')->nullable()->index();
            //$table->text('description')->nullable()->fulltext();
            $table->enum('type', Type::values())->index();
            $table->enum('city', City::values())->index();
            $table->string('place_id')->nullable()->index();
            $table->string('address')->nullable();
            $table->string('latitude', 20)->nullable()->index();
            $table->string('longitude', 20)->nullable()->index();
            $table->string('url')->nullable();
            $table->enum('sockets', Sockets::values())->index();
            $table->enum('noise', Noise::values())->index();
            $table->enum('size', Size::values())->index();
            $table->enum('busyness', Busyness::values())->index();
            $table->enum('view', View::values())->index();
            $table->unsignedFloat('v_rate', 2, 1)->nullable()->index();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
