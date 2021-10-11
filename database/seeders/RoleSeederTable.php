<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['name' => 'Super Admin'],
            ['name' => 'Admin'],
            ['name' => 'Fied Worker'],
            ['name' => 'Branch Manager'],
            ['name' => 'Employee'],
            ['name' => 'Sub Admin'],
            ['name' => 'Finance'],
            ['name' => 'Account Clerk'],
            ['name' => 'Cashier'],
            ['name' => 'Cleaner'],
            ['name' => 'Customer Service'],
            ['name' => 'Branch Manager'],
            ['name' => 'Loan Officer'],
            ['name' => 'Officer In Charge'],
            ['name' => 'Operations Officer'],
            ['name' => 'Mobile Banker'],
            ['name' => 'Relationship Manager'],
            ['name' => 'Retail Manager'],
            ['name' => 'Teller'],
            ['name' => 'Sales Executive'],
            ['name' => 'Mobile Money Agent'],
            ['name' => 'Auditor'],
        ];

        foreach ($roles as $role) {
            $role = Role::firstOrCreate(
                ['name' => $role['name']],
                ['name' => $role['name']]
            );
        }

        // $user1 = User::find(1);
        // $a = Role::findByName('Super Admin');
        // $user1->assignRole([$a->id]);

        // $user1 = User::find(2);
        // $b = Role::findByName('Admin');
        // $user1->assignRole([$b->id]);

        // $user1 = User::find(3);
        // $c = Role::findByName('Employee');
        // $user1->assignRole([$c->id]);
    }
}
