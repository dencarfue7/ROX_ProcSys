<?php

namespace Database\Seeders;

use App\Models\FundSource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FundSourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fundSources = [
            [
                'code' => 'GAA',
                'name' => 'General Appropriations Act',
                'description' => 'General government appropriations.',
            ],
            [
                'code' => 'MOOE',
                'name' => 'Maintenance and Other Operating Expenses',
                'description' => 'MOOE fund source.',
            ],
            [
                'code' => 'CO',
                'name' => 'Capital Outlay',
                'description' => 'Capital outlay fund source.',
            ],
        ];

        foreach ($fundSources as $fundSource) {
            FundSource::updateOrCreate(
                ['code' => $fundSource['code']],
                $fundSource
            );
        }
    }
}
