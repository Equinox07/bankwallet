<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Keygen\Keygen;
use App\Models\Account;
use App\Models\AccountOption;
use App\Models\User;

class AccountOptionSeeder extends Seeder
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
                'name' => "Personal Account",
                "type" => "personal",
            ],
            [
                'name' => "Business Account",
                "type" => "business",
            ],
            [
                'name' => "Joint Account",
                "type" => "joint",
            ],
            [
                'name' => "Group Account",
                "type" => "group",
            ],

        ];


        foreach ($users as $user) {
            $user = AccountOption::firstOrCreate(
                ['name' => $user['name']],
                [
                    'name' => $user['name'],
                    "type" => $user["type"],
                ]
            );
        }
    }


    // public function getRentCode()
    // {
    //     $year = Carbon::now()->year;
    //     $splitStrings = function ($key) {
    //         return \join('-', str_split($key, 4));
    //     };

    //     $strToUpper = function ($key) {
    //         return \strtoupper($key);
    //     };

    //     do {
    //         $rentCode = Keygen::numeric(12)->prefix('RENT-')->generate($splitStrings, $strToUpper);
    //     } while (Account::where("account_number", $rentCode)->count() > 0);

    //     // return $rentCode;
    // }
}
