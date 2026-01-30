<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Cuerda',
                'description' => 'Instrumentos que producen sonido mediante la vibración de cuerdas.',
                'family' => 'Cuerda',
            ],
            [
                'name' => 'Viento madera',
                'description' => 'Instrumentos de viento que generan sonido al soplar a través de una boquilla o lengüeta.',
                'family' => 'Viento',
            ],
            [
                'name' => 'Viento metal',
                'description' => 'Instrumentos de viento fabricados principalmente en metal.',
                'family' => 'Viento',
            ],
            [
                'name' => 'Percusión',
                'description' => 'Instrumentos que producen sonido al ser golpeados o agitados.',
                'family' => 'Percusión',
            ],
            [
                'name' => 'Teclado',
                'description' => 'Instrumentos que se tocan mediante un conjunto de teclas.',
                'family' => 'Teclado',
            ],
            [
                'name' => 'Electrónicos',
                'description' => 'Instrumentos que generan sonido mediante circuitos electrónicos.',
                'family' => 'Electrónica',
            ],
        ];
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
