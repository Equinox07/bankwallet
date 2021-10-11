<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $currencies = [
            [
                'name' => "Ghana Cedi",
                "short_code" => "GHS",
                'status' => 1,
            ],
            [
                'name' => "United States Dollar",
                "short_code" => "USD",
                'status' => 1,
            ],
            [
                'name' => "Great Britain Pounds ",
                "short_code" => "GBP",
                'status' => 1,
            ],
        ];

        foreach ($currencies as $item) {
            $b = Currency::updateOrCreate(
                ['short_code' => $item['short_code']],
                [
                    'name' => $item['name'],
                    'short_code' => $item['short_code'],
                    'status' => $item['status']
                ]
            );
        }
    }
}
