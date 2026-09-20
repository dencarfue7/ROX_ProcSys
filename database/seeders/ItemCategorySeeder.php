<?php

namespace Database\Seeders;

use App\Models\ItemCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'code' => 'IT',
                'name' => 'Information Technology Equipment',
            ],
            [
                'code' => 'OFFICE',
                'name' => 'Office Supplies',
            ],
            [
                'code' => 'FURN',
                'name' => 'Furniture and Fixtures',
            ],
            [
                'code' => 'ELEC',
                'name' => 'Electrical Supplies',
            ],
            [
                'code' => 'JAN',
                'name' => 'Janitorial Supplies',
            ],
            [
                'code' => 'SERVICE',
                'name' => 'Services',
            ],
        ];

        foreach ($categories as $category) {
            ItemCategory::updateOrCreate(
                ['code' => $category['code']],
                $category
            );
        }
    }
}
