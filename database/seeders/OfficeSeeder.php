<?php

namespace Database\Seeders;

use App\Models\Office;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offices = [
            [
                'code' => 'ICT',
                'name' => 'Information and Communications Technology',
                'description' => 'Information and communications technology office.',
            ],
            [
                'code' => 'ADMIN',
                'name' => 'Administrative Office',
                'description' => 'Administrative and general services office.',
            ],
            [
                'code' => 'FIN',
                'name' => 'Finance Office',
                'description' => 'Finance and accounting office.',
            ],
            [
                'code' => 'HR',
                'name' => 'Human Resources Office',
                'description' => 'Human resources office.',
            ],
        ];

        foreach ($offices as $office) {
            Office::updateOrCreate(
                ['code' => $office['code']],
                $office
            );
        }
    }
}
