<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeederTable::class);
        $this->call(UserSeederTable::class);
        $this->call(IdTypeSeeder::class);
        $this->call(AccountOptionSeeder::class);
        $this->call(AccountTypeSeeder::class);
        $this->call(BranchSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(CurrencySeeder::class);
    }
}
