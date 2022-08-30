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
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Garden->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero Dasoudi',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
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
            'sockets' => Sockets::None->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Second Cup',
            'description' => 'Big coffee shop with coffee, food and the average number of sockets. Located in the harbour',
            'type' => Type::Cafe->value,
            'city' => City::AyiaNapa->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Costa Coffee',
            'type' => Type::Cafe->value,
            'city' => City::AyiaNapa->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => "Gloria Jean's Coffees",
            'type' => Type::Cafe->value,
            'city' => City::AyiaNapa->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'The Melting Pot',
            'description' => 'Friendly spot for coffee, wine and work',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Caffe Vergnano 1882',
            'description' => 'Average-size family-owned cafe with coffee, drinks, ice cream and food',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'CoffeeBrands Makariou',
            'description' => 'Small neighbourhood coffee shop with delicious doughnuts and football on TV',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => '90 Degrees',
            'description' => 'Big coffee shop with a magnificent sea view and planes',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Second cup',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero Oroklini',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Native',
            'description' => 'A shared workspace in Larnaca’s old town. It’s a place to meet, host and work - together',
            'type' => Type::Coworking->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Coffee Berry Kyprianou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Coffee Berry Piale Pasa',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Coffee Lab Kyprianou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Coffee Island Finikoudes',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Coffee Island Stratigou Timagia',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Coffee Island Dianellou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::None->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Coffee Island Faneromenis',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Coffeehouse Stratigou Timagia',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Costa Coffee Stasinou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Starbucks Finikoudes',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Starbucks Ermou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Kafeneion 26',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Small->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Coffeehouse Artemidos',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Small->value,
            'location' => Location::Unhandy->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero Mackenzie',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'La Croissanterie',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Unhandy->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Waycup',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'La Croissanterie Pareklisia',
            'description' => 'A small and peaceful location opposite the holy Cyprus IT Malindi beach.',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Small->value,
            'location' => Location::Unhandy->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Starbucks Georgiou',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Starbucks Makarou',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero Molos',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero Limassol Marina',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero QCG9+VVM',
            'type' => Type::Cafe->value,
            'city' => City::Paphos->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Caffè Nero Kato Paphos',
            'type' => Type::Cafe->value,
            'city' => City::Paphos->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
        ]);

        Place::create([
            'name' => 'Coffeehouse',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'iheart cafe',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Starbucks Griva Digeni',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'size' => Size::Average->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);

        Place::create([
            'name' => 'Starbucks Mall of Cyprus',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'size' => Size::Big->value,
            'location' => Location::Convenient->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
        ]);
    }
}
