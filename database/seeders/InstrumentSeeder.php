<?php

namespace Database\Seeders;

use App\Models\Instrument;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all()->keyBy('name');

        $instruments = [
            // Cuerda
            [
                'name' => 'Guitarra acústica',
                'brand' => 'Yamaha',
                'price' => 249.99,
                'weight' => 2.5,
                'is_acoustic' => true,
                'release_year' => 2018,
                'category' => 'Cuerda',
            ],
            [
                'name' => 'Violín',
                'brand' => 'Stentor',
                'price' => 189.50,
                'weight' => 0.45,
                'is_acoustic' => true,
                'release_year' => 2020,
                'category' => 'Cuerda',
            ],
            [
                'name' => 'Bajo eléctrico',
                'brand' => 'Fender',
                'price' => 799.00,
                'weight' => 4.2,
                'is_acoustic' => false,
                'release_year' => 2019,
                'category' => 'Cuerda',
            ],

            // Viento madera
            [
                'name' => 'Flauta travesera',
                'brand' => 'Yamaha',
                'price' => 320.00,
                'weight' => 0.30,
                'is_acoustic' => true,
                'release_year' => 2017,
                'category' => 'Viento madera',
            ],
            [
                'name' => 'Clarinete',
                'brand' => 'Buffet Crampon',
                'price' => 599.99,
                'weight' => 0.8,
                'is_acoustic' => true,
                'release_year' => 2016,
                'category' => 'Viento madera',
            ],

            // Viento metal
            [
                'name' => 'Trompeta',
                'brand' => 'Bach',
                'price' => 699.00,
                'weight' => 1.2,
                'is_acoustic' => true,
                'release_year' => 2015,
                'category' => 'Viento metal',
            ],
            [
                'name' => 'Trombón',
                'brand' => 'Yamaha',
                'price' => 850.00,
                'weight' => 2.6,
                'is_acoustic' => true,
                'release_year' => 2014,
                'category' => 'Viento metal',
            ],

            // Percusión
            [
                'name' => 'Batería acústica',
                'brand' => 'Pearl',
                'price' => 999.99,
                'weight' => 25.0,
                'is_acoustic' => true,
                'release_year' => 2018,
                'category' => 'Percusión',
            ],
            [
                'name' => 'Cajón flamenco',
                'brand' => 'Meinl',
                'price' => 179.00,
                'weight' => 5.5,
                'is_acoustic' => true,
                'release_year' => 2021,
                'category' => 'Percusión',
            ],

            // Teclado
            [
                'name' => 'Piano digital',
                'brand' => 'Roland',
                'price' => 1200.00,
                'weight' => 11.0,
                'is_acoustic' => false,
                'release_year' => 2020,
                'category' => 'Teclado',
            ],
            [
                'name' => 'Teclado workstation',
                'brand' => 'Korg',
                'price' => 1599.00,
                'weight' => 13.5,
                'is_acoustic' => false,
                'release_year' => 2019,
                'category' => 'Teclado',
            ],

            // Electrónicos
            [
                'name' => 'Sintetizador analógico',
                'brand' => 'Moog',
                'price' => 1899.99,
                'weight' => 8.0,
                'is_acoustic' => false,
                'release_year' => 2021,
                'category' => 'Electrónicos',
            ],
            [
                'name' => 'Controlador MIDI',
                'brand' => 'Akai',
                'price' => 249.00,
                'weight' => 3.2,
                'is_acoustic' => false,
                'release_year' => 2022,
                'category' => 'Electrónicos',
            ],
        ];

        foreach ($instruments as $instrument) {
            Instrument::create([
                'name' => $instrument['name'],
                'brand' => $instrument['brand'],
                'price' => $instrument['price'],
                'weight' => $instrument['weight'],
                'is_acoustic' => $instrument['is_acoustic'],
                'release_year' => $instrument['release_year'],
                'category_id' => $categories[$instrument['category']]->id,
            ]);
        }
    }
}
