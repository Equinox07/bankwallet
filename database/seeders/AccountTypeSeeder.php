<?php

namespace Database\Seeders;

use App\Models\AccountType;
use Illuminate\Database\Seeder;
use App\Models\User;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => "Susu",
                "range" => 3100,
                "short_code" => "SU-1013",
                'status' => 1,
            ],
            [
                'name' => "Savings",
                "range" => 4100,
                "short_code" => "SA-1014",
                'status' => 1,

            ],
            [
                'name' => "Investment",
                "range" => 5100,
                "short_code" => "IN-1015",
                'status' => 1,

            ],
            [
                'name' => "Loans",
                "range" => 2100,
                "short_code" => "LN-1012",
                'status' => 1,

            ],
            [
                'name' => "Staff",
                "range" => 1100,
                "short_code" => "ST-1101",
                'status' => 1,

            ],

        ];


        foreach ($users as $user) {
            $user = AccountType::firstOrCreate(
                ['name' => $user['name']],
                [
                    'name' => $user['name'],
                    "range" => $user["range"],
                    "short_code" => $user["short_code"],
                    'status' => $user['status'],
                ]
            );
        }
    }
}
