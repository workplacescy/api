<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\Busyness;
use App\Enums\City;
use App\Enums\Cuisine;
use App\Enums\Noise;
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
            'title' => "Paul's Coffee Roasters",
            'description' => 'Cosy coffee shop in Larnaca downtown. There are 5-7 well-known coffee origins, V60, Cold Brew and classic drinks. A small main hall and a large garden in the backyard. Few power outlets for digital nomads',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Garden->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Caffè Nero Dasoudi',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Uluwatu Specialty Coffee',
            'description' => 'Large selection of coffee origins and comfortable sofas in the old town of Limassol. Few outlets only',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'South Coast Specialty Coffee',
            'description' => 'Large coffee shop in the Mackenzie beach area. Several classic coffee origins, tables with sockets and a separate playground for children',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'The Daily Roast',
            'description' => 'Friendly coffee shop with smiling barista, breakfast and brunch. There are few tables with outlets inside and outside',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Green Colibri',
            'description' => 'High-quality coffee and drinks to work, study, pass a day, and snack. Pleasant design and friendly staff',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Kollaborative Coffee Roasters',
            'description' => 'Middle-size coffee shop and bar in Nicosia old town. Selection of coffee origins, few tables inside and outside',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'A κχoffee project',
            'description' => 'Lovely coffee shop with a large selection of good coffee beans, pour-overs and a pleasant environment',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'iDesk.space',
            'description' => 'iDesk.space is centrally based in Larnaca, Cyprus. Easy going setup in a Relaxed atmosphere, cool space with super fast internet and cool people. Local knowledge for assisting if you need anything not work related such as places to go, things to see, where to eat, finding a place to live ;)',
            'type' => Type::Coworking->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Dear all',
            'description' => 'Small coffee shop with good food and without sockets',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::None->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'The Shopkeeper & Co',
            'description' => 'Bizarre busy store and coffee bar',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Stories',
            'description' => 'Tiny coffee shop with ordinary coffee, croissants and without sockets',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::None->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Second Cup',
            'description' => 'Big coffee shop with coffee, food and the average number of sockets. Located in the harbour',
            'type' => Type::Cafe->value,
            'city' => City::AyiaNapa->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee',
            'type' => Type::Cafe->value,
            'city' => City::AyiaNapa->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => "Gloria Jean's Coffees",
            'type' => Type::Cafe->value,
            'city' => City::AyiaNapa->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'The Melting Pot',
            'description' => 'Friendly spot for coffee, wine and work',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Caffe Vergnano 1882',
            'description' => 'Average-size family-owned cafe with coffee, drinks, ice cream and food',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'CoffeeBrands Makariou',
            'description' => 'Small neighbourhood coffee shop with delicious doughnuts and football on TV',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => '90 Degrees',
            'description' => 'Big coffee shop with a magnificent sea view and planes',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second cup',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Caffè Nero Oroklini',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Native',
            'description' => 'A shared workspace in Larnaca’s old town. It’s a place to meet, host and work - together',
            'type' => Type::Coworking->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffee Berry Kyprianou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Coffee Berry Piale Pasa',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Coffee Lab Kyprianou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffee Island Finikoudes',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffee Island Stratigou Timagia',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffee Island Dianellou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::None->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffee Island Faneromenis',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffeehouse Stratigou Timagia',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Stasinou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Starbucks Finikoudes',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Starbucks Ermou',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Kafeneion 26',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffeehouse Artemidos',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Caffè Nero Mackenzie',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'La Croissanterie',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Waycup',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'La Croissanterie Pareklisia',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Small->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Starbucks Georgiou',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Starbucks Makarou',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Caffè Nero Molos',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Caffè Nero Limassol Marina',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Caffè Nero QCG9+VVM',
            'type' => Type::Cafe->value,
            'city' => City::Paphos->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Caffè Nero Kato Paphos',
            'type' => Type::Cafe->value,
            'city' => City::Paphos->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Coffeehouse',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'iheart cafe',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Starbucks Griva Digeni',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Starbucks Mall of Cyprus',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Hub Design Platform',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'The Business Bar',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Regus Victory House',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Regus Prodromou Avenue',
            'type' => Type::Coworking->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Regus Jacovides Tower',
            'type' => Type::Coworking->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Ecastica Arch. Makariou',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Ecastica Gala Court Chambers',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Ecastica Omega Business Center',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Ecastica Spyrou Kyprianou',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Arianthi Business Centre',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Pindou Business Centre',
            'type' => Type::Coworking->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Coffee Corner',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::None->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Antwork',
            'type' => Type::Coworking->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Artius Office',
            'type' => Type::Coworking->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Starbucks Anexartisias',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Starbucks',
            'type' => Type::Cafe->value,
            'city' => City::Protaras->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Hügge',
            'type' => Type::Coworking->value,
            'city' => City::Paphos->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Coffee->value,
        ]);

        Place::create([
            'title' => 'Food Park City',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Quite->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Low->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second Cup',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second Cup',
            'type' => Type::Cafe->value,
            'city' => City::Paralimni->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second Cup Egkomi',
            'description' => 'Lala Cafe',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Lála Café Stasinou',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second Cup Lakatamia',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second Cup Stadiou',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second Cup Latsia',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Big->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Second Cup Recanto store',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Bean Bar Old Port',
            'description' => 'Nice place in the heart of Limassol for quick fixes or meetings',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::None->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Airport',
            'description' => 'There are two places: inside and outside the Larnaca airport. Both are appropriate for a snack and some quick tasks',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Nicosia Central',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Makariou',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Stavrou',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Nikolaou',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Odessa Hotel',
            'type' => Type::Cafe->value,
            'city' => City::Protaras->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Kallipoleos',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Nicosia Mall',
            'type' => Type::Cafe->value,
            'city' => City::Nicosia->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Makariou',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Germasogeia',
            'type' => Type::Cafe->value,
            'city' => City::Limassol->value,
            'sockets' => Sockets::Many->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Metropolis mall',
            'type' => Type::Cafe->value,
            'city' => City::Larnaca->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Noisy->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::High->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee Kouklia',
            'type' => Type::Cafe->value,
            'city' => City::Paphos->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Sea->value,
            'cuisine' => Cuisine::Full->value,
        ]);

        Place::create([
            'title' => 'Costa Coffee QC48+FR5',
            'type' => Type::Cafe->value,
            'city' => City::Paphos->value,
            'sockets' => Sockets::Few->value,
            'noise' => Noise::Medium->value,
            'size' => Size::Average->value,
            'busyness' => Busyness::Average->value,
            'view' => View::Street->value,
            'cuisine' => Cuisine::Full->value,
        ]);
    }
}
