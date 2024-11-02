<?php

namespace Database\Seeders;

use App\Models\PizzaStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusPizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusPizza = [
            [
                'status_pizza' => 'Preparing',
            ],
            [
                'status_pizza' => 'In the Over',
            ],
            [
                'status_pizza' => 'Last steps',
            ],
            [
                'status_pizza' => 'Finished',
            ]
        ];

        foreach ($statusPizza as $status) {
            PizzaStatus::create($status);
        }
    }
}
