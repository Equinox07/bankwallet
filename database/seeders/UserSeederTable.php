<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $users = [
            [
                'name' => "Super Admin",
                "username" => "super-admin-nnuro",
                "type" => "super-admin",
                'email' => "super.admin@banky.com",
                'password' => bcrypt('supersecret'),
            ],
            [
                'name' => "Admin Banky",
                "username" => "admin-nnuro",
                "type" => "admin",
                'email' => "admin@banky.com",
                'password' => bcrypt('adminsecret'),

            ],
            [
                'name' => "User Employee",
                "username" => "user-employee",
                "type" => "employee",
                'email' => "employee@banky.com",
                'password' => bcrypt('employeesecret'),

            ],

        ];


        foreach ($users as $user) {
            $user = User::firstOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    "username" => $user["username"],
                    "type" => $user["type"],
                    'email' => $user['email'],
                    'password' => $user['password']
                ]
            );
        }
    }
}
