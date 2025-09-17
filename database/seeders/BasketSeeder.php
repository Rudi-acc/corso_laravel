<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Basket;

class BasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Basket::create([
            'code' => 'BASKET001',
            'type' => 'Plastica',
            'location_id' => 1,
        ]);
        Basket::create([
            'code' => 'BASKET002',
            'type' => 'Carta',
            'location_id' => 1,
        ]);
        Basket::create([
            'code' => 'BASKET003',
            'type' => 'Indifferenziata',
            'location_id' => 1,
        ]);
        Basket::create([
            'code' => 'BASKET004',
            'type' => 'Plastica',
            'location_id' => 2,
        ]);
        Basket::create([
            'code' => 'BASKET005',
            'type' => 'Carta',
            'location_id' => 2,
        ]);
        Basket::create([
            'code' => 'BASKET006',
            'type' => 'Indifferenziata',
            'location_id' => 2,
        ]);
        Basket::create([
            'code' => 'BASKET007',
            'type' => 'Plastica',
            'location_id' => 3,
        ]);
        Basket::create([
            'code' => 'BASKET008',
            'type' => 'Carta',
            'location_id' => 3,
        ]);
        Basket::create([
            'code' => 'BASKET009',
            'type' => 'Indifferenziata',
            'location_id' => 3,
        ]);
    }
}
