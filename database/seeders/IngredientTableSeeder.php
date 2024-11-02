<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IngredientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = [
            [
                'name' => 'bbq saus',
                'price' => '0.49',
                'unit' => 'gram'
            ],
            [
                'name' => 'tomatensaus',
                'price' => '0.49',
                'unit' => 'gram'
            ],
            [
                'name' => 'ham',
                'price' => '0.49',
                'unit' => 'stuk'
            ],
            [
                'name' => 'salami',
                'price' => '0.49',
                'unit' => 'stuk'
            ],
            [
                'name' => 'kip',
                'price' => '0.49',
                'unit' => 'stuk'
            ],
            [
                'name' => 'broccoli',
                'price' => '0.49',
                'unit' => 'stuk'
            ],
            [
                'name' => 'rode ui',
                'price' => '0.49',
                'unit' => 'stuk'
            ],
            [
                'name' => 'mozzarella',
                'price' => '0.49',
                'unit' => 'stuk'
            ],
            [
                'name' => 'gorgonzola',
                'price' => '0.49',
                'unit' => 'stuk'
            ],
            [
                'name' => 'bbq swirl',
                'price' => '0.49',
                'unit' => 'gram'
            ],
            [
                'name' => 'tonijn',
                'price' => '0.49',
                'unit' => 'stuk'
            ]
        ];

        foreach ($ingredients as $ingredient) {
            Ingredient::create($ingredient);
        }
    }
}
