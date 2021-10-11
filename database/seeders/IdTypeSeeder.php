<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AccountType;
use App\Models\IdType;

class IdTypeSeeder extends Seeder
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
                'name' => "Voters",
                "short_code" => "SVY",
                'status' => 1,
            ],
            [
                'name' => "NHIS",
                "short_code" => "NHI",
                'status' => 1,
            ],
            [
                'name' => "Driving License",
                "short_code" => "DLI",
                'status' => 1,
            ],
            [
                'name' => "Passport",
                "short_code" => "PP",
                'status' => 1,
            ],
            [
                'name' => "Ghana Card",
                "short_code" => "GC",
                'status' => 1,
            ],

        ];


        foreach ($users as $user) {
            $user = IdType::updateOrCreate(
                ['name' => $user['name']],
                [
                    'name' => $user['name'],
                    "short_code" => $user["short_code"],
                    'status' => $user['status'],
                ]
            );
        }
    }
}
