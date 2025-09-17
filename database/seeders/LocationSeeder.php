<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => 'Parco del Marecchia',
            'description' => 'Un parco situato lungo il fiume Marecchia a Rimini.',
            'latitude' => 44.0582,
            'longitude' => 12.5695,
        ]);
        Location::create([
            'name' => 'Piazza Cavour',
            'description' => 'Una piazza storica nel centro di Rimini.',
            'latitude' => 44.0605,
            'longitude' => 12.5697,
        ]);
        Location::create([
            'name' => 'Tempio Malatestiano',
            'description' => 'Una cattedrale rinascimentale a Rimini.',
            'latitude' => 44.0610,
            'longitude' => 12.5683,
        ]); 
    }
}
