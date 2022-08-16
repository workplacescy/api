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
            'city' => City::Larnaca->value,
            'place_id' => 'ChIJGyOA68eD4BQRZtKA5kM_O0c',
            'address' => 'Armenian Church Street 35A, street 6022, Cyprus',
            'latitude' => '34.9143997',
            'longitude' => '33.634976',
            'url' => 'https://maps.google.com/?cid=5132765761181373030',
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Garden->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero Dasoudi',
            'description' => 'Caffè Nero Dasoudi',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'place_id' => 'ChIJibWWMAQz5xQRKcw-gn-yjFw',
            'address' => '45 Promaxon Eleftherias, Agios Athanasios, Limassol 4103, Cyprus',
            'latitude' => '34.69177759999999',
            'longitude' => '33.07752190000001',
            'url' => 'https://maps.google.com/?cid=6668901408944606249',
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
            'city' => City::Limassol->value,
            'place_id' => 'ChIJbSttYBsz5xQR1h0m6ubX9g0',
            'address' => 'Anexartisias 10, Limassol 3036, Cyprus',
            'latitude' => '34.675204',
            'longitude' => '33.04662',
            'url' => 'https://maps.google.com/?cid=1006228953534701014',
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
            'city' => City::Larnaca->value,
            'place_id' => 'ChIJf2r8H92C4BQRClDxls7Viu4',
            'address' => 'Mackenzie Beach, Larnaka 6028, Cyprus',
            'latitude' => '34.889787',
            'longitude' => '33.6371021',
            'url' => 'https://maps.google.com/?cid=17188786011085295626',
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
            'city' => City::Nicosia->value,
            'place_id' => 'ChIJ-_-vweMZ3hQRrS0J-nQjuuY',
            'address' => 'Esperidon 2, Strovolos, Cyprus',
            'latitude' => '35.1582018',
            'longitude' => '33.3642074',
            'url' => 'https://maps.google.com/?cid=16625639959709691309',
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
            'city' => City::Nicosia->value,
            'place_id' => 'ChIJP2XvqN4X3hQRSJx83Z10fdM',
            'address' => 'Agapinoros, Nicosia, Cyprus',
            'latitude' => '35.1617596',
            'longitude' => '33.3646965',
            'url' => 'https://maps.google.com/?cid=15239464935466245192',
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
            'city' => City::Nicosia->value,
            'place_id' => 'ChIJTf61IgAX3hQRCwEn_V1idxA',
            'address' => 'Vasilissis Freiderikis 4, Nicosia, Cyprus',
            'latitude' => '35.1671026',
            'longitude' => '33.3569759',
            'url' => 'https://maps.google.com/?cid=1186525182654087435',
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
            'city' => City::Nicosia->value,
            'place_id' => 'ChIJF6t_GVwX3hQR72Mg8Uv5p1o',
            'address' => 'Pindarou 29D, Nicosia 1060, Cyprus',
            'latitude' => '35.1664865',
            'longitude' => '33.3666372',
            'url' => 'https://maps.google.com/?cid=6532463889087489007',
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
            'city' => City::Larnaca->value,
            'place_id' => 'ChIJeepE8tWD4BQRzsu8qijL13A',
            'address' => '14, 1st April Street Unit 3 Larnaca, 6035, Cyprus',
            'latitude' => '34.9171348',
            'longitude' => '33.6187193',
            'url' => 'https://maps.google.com/?cid=8131191027764349902',
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Unhandy->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Dear all',
            'description' => 'Small coffee shop with good food and without sockets',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'place_id' => 'ChIJf5tk_vUz5xQRzYevtGMIBOQ',
            'address' => 'M2JX+9WG, Georgiou Karaiskaki 20b, Limassol 3032, Cyprus',
            'latitude' => '34.6813345',
            'longitude' => '33.0488308',
            'url' => 'https://maps.google.com/?cid=16430266564880598989',
            'sockets' => Sockets::None->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'The Shopkeeper & Co',
            'description' => 'Bizarre busy store and coffee bar',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'place_id' => 'ChIJEY-Nnxwz5xQRptn4sJVrQW0',
            'address' => 'Gladstonos 92, Limassol, Cyprus',
            'latitude' => '34.6812041',
            'longitude' => '33.0454237',
            'url' => 'https://maps.google.com/?cid=7872691914283735462',
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Stories',
            'description' => 'Tiny coffee shop with ordinary coffee, croissants and without sockets',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'place_id' => 'ChIJP8Rf_zQz5xQRxBnVANt1Nvk',
            'address' => 'Anexartisias 100, Limassol, Cyprus',
            'latitude' => '34.67825680000001',
            'longitude' => '33.0446193',
            'url' => 'https://maps.google.com/?cid=17957670147658684868',
            'sockets' => Sockets::None->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);
    }
}
