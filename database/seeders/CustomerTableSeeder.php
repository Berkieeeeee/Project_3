<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'firstname' => 'Thomas',
                'lastname' => 'Van Elswijk',
                'e-mail' => 'test@test.com',
                'phone-number' => '0123456789',
                'address' => 'Berg 6',
                'city' => 'Neuenen'
            ],
            [
                'firstname' => 'Damian',
                'lastname' => 'Van der Lee',
                'e-mail' => 'test2@test2.com',
                'phone-number' => '0123456999',
                'address' => 'spotvogelstraat 12',
                'city' => 'Neuenen'
            ],
            [
                'firstname' => 'Anil',
                'lastname' => 'Ahadi',
                'e-mail' => 'test3@test3.com',
                'phone-number' => '0144456789',
                'address' => 'cracstreet 3',
                'city' => 'Eindhoven'
            ],
            [
                'firstname' => 'Lars',
                'lastname' => 'Meulenbroeks',
                'e-mail' => 'test4@test4.com',
                'phone-number' => '012377789',
                'address' => 'Klompenmaker 6',
                'city' => 'Roggel'
            ],
            [
                'firstname' => 'Berk',
                'lastname' => 'Sönmez',
                'e-mail' => 'test5@test5.com',
                'phone-number' => '12121212',
                'address' => 'Teststraat 98',
                'city' => 'Eindhoven'
            ],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
