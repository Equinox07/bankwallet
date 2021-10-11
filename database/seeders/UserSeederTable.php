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
                'roles' => ['Super Admin']
            ],
            [
                'name' => "Admin Banky",
                "username" => "admin-nnuro",
                "type" => "admin",
                'email' => "admin@banky.com",
                'password' => bcrypt('adminsecret'),
                'roles' => ['Admin']

            ],
            [
                'name' => "User Employee",
                "username" => "user-employee",
                "type" => "employee",
                'email' => "employee@banky.com",
                'password' => bcrypt('employeesecret'),
                'roles' => ['Employee']
            ],
            [
                'name' => "Cashier Employee",
                "username" => "user-employee",
                "type" => "cashier",
                'email' => "cashier@banky.com",
                'password' => bcrypt('employeesecret'),
                'roles' => ['Cashier']
            ],
            [
                'name' => "Teller Employee",
                "username" => "teller-employee",
                "type" => "teller",
                'email' => "teller@banky.com",
                'password' => bcrypt('employeesecret'),
                'roles' => ['Teller']
            ],

        ];


        foreach ($users as $user) {
            $u = User::firstOrCreate(
                ['email' => $user['email']],
                [
                    'name' => $user['name'],
                    "username" => $user["username"],
                    "type" => $user["type"],
                    'email' => $user['email'],
                    'password' => $user['password']
                ]
            );

            $u->syncRoles($user['roles']);
        }
    }
}
