<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Location;
use App\Enums\Size;
use App\Enums\Sockets;
use App\Enums\Type;
use App\Enums\View;
use App\Models\Place;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Place::create([
            'name' => "Paul's Coffee Roasters",
            'description' => 'Cosy coffee shop in Larnaca downtown. There are 5-7 well-known coffee origins, V60, Cold Brew and classic drinks. A small main hall and a large garden in the backyard. Few power outlets for digital nomads',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJGyOA68eD4BQRZtKA5kM_O0c',
            'city' => City::Larnaca->value,
            'latitude' => '34.9143997',
            'longitude' => '33.634976',
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Garden->value,
        ]);

        Place::create([
            'name' => 'Cafe Nero Dasoudi',
            'description' => 'Cafe Nero Dasoudi',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJibWWMAQz5xQRKcw-gn-yjFw',
            'city' => City::Limassol->value,
            'latitude' => '34.6917776',
            'longitude' => '33.0775219',
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Uluwatu Specialty Coffee',
            'description' => 'Large selection of coffee origins and comfortable sofas in the old town of Limassol. Few outlets only',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJbSttYBsz5xQR1h0m6ubX9g0',
            'city' => City::Limassol->value,
            'latitude' => '34.675204',
            'longitude' => '33.04662',
            'sockets' => Sockets::Few->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'South Coast Specialty Coffee',
            'description' => 'Large coffee shop in the Mackenzie beach area. Several classic coffee origins, tables with sockets and a separate playground for children',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJf2r8H92C4BQRClDxls7Viu4',
            'city' => City::Larnaca->value,
            'latitude' => '34.889787',
            'longitude' => '33.6371021',
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'The Daily Roast',
            'description' => 'Friendly coffee shop with smiling barista, breakfast and brunch. There are few tables with outlets inside and outside',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJ-_-vweMZ3hQRrS0J-nQjuuY',
            'city' => City::Nicosia->value,
            'latitude' => '35.1582018',
            'longitude' => '33.3642074',
            'sockets' => Sockets::Many->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Green Colibri',
            'description' => 'High-quality coffee and drinks to work, study, pass a day, and snack. Pleasant design and friendly staff',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJP2XvqN4X3hQRSJx83Z10fdM',
            'city' => City::Nicosia->value,
            'latitude' => '35.1616877',
            'longitude' => '33.3650239',
            'sockets' => Sockets::Few->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Kollaborative Coffee Roasters',
            'description' => 'Middle-size coffee shop and bar in Nicosia old town. Selection of coffee origins, few tables inside and outside',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJTf61IgAX3hQRCwEn_V1idxA',
            'city' => City::Nicosia->value,
            'latitude' => '35.1671026',
            'longitude' => '33.3569759',
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'A κχoffee project',
            'description' => 'Lovely coffee shop with a large selection of good coffee beans, pour-overs and a pleasant environment',
            'type' => Type::Cafe->value,
            'place_id' => 'ChIJF6t_GVwX3hQR72Mg8Uv5p1o',
            'city' => City::Nicosia->value,
            'latitude' => '35.1664865',
            'longitude' => '33.3666372',
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'iDesk.space',
            'description' => 'iDesk.space is centrally based in Larnaca, Cyprus. Easy going setup in a Relaxed atmosphere, cool space with super fast internet and cool people. Local knowledge for assisting if you need anything not work related such as places to go, things to see, where to eat, finding a place to live ;)',
            'type' => Type::Coworking->value,
            'place_id' => 'ChIJeepE8tWD4BQRzsu8qijL13A',
            'city' => City::Larnaca->value,
            'latitude' => '34.9171348',
            'longitude' => '33.6187193',
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Unhandy->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        //Place::create([
        //    'name' => '',
        //    'description' => '',
        //    'type' => Type::Cafe->value,
        //    'place_id' => '',
        //    'city' => City::Nicosia->value,
        //    'latitude' => '',
        //    'longitude' => '',
        //    'sockets' => Sockets::Many->value,
        //    'size' => Size::Big->value,
        //    'location' => Location::Convenient->value,
        //    'busyness' => Busyness::Average->value,
        //    'view' => View::Street->value,
        //]);
    }
}
