<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            ['code' => 'PC', 'name' => 'Piece'],
            ['code' => 'BOX', 'name' => 'Box'],
            ['code' => 'REAM', 'name' => 'Ream'],
            ['code' => 'SET', 'name' => 'Set'],
            ['code' => 'UNIT', 'name' => 'Unit'],
            ['code' => 'LOT', 'name' => 'Lot'],
            ['code' => 'PACK', 'name' => 'Pack'],
            ['code' => 'CAN', 'name' => 'Can'],
            ['code' => 'BOTTLE', 'name' => 'Bottle'],
            ['code' => 'SERVICE', 'name' => 'Service'],
        ];

        foreach ($units as $unit) {
            Unit::updateOrCreate(
                ['code' => $unit['code']],
                $unit
            );
        }
    }
}
