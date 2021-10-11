<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = [
            [
                'name' => "Afienya",
                "branch_code" => "AFI01",
                'status' => 1,
            ],
            [
                'name' => "Kasoa",
                "branch_code" => "KS1023",
                'status' => 1,
            ],
            [
                'name' => "Oyibi ",
                "branch_code" => "OY1020",
                'status' => 1,
            ],
        ];

        foreach ($branches as $branch) {
            $b = Branch::updateOrCreate(
                ['branch_code' => $branch['branch_code']],
                [
                    'name' => $branch['name'],
                    'branch_code' => $branch['branch_code'],
                    'status' => $branch['status']
                ]
            );
        }
    }
}
