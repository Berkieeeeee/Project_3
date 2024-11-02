<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [
            [
                'customer_id' => '1',
                'total_price' => '120'
            ],
            [
                'customer_id' => '2',
                'total_price' => '10'
            ],
            [
                'customer_id' => '3',
                'total_price' => '15'
            ],
            [
                'customer_id' => '4',
                'total_price' => '26'
            ],
            [
                'customer_id' => '5',
                'total_price' => '14'
            ]
        ];

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
