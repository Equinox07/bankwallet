<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Keygen\Keygen;
use App\Models\Account;

class AccountOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
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
