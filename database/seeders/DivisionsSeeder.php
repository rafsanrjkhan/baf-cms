<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class DivisionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            "Barisal",
            "Chittagong",
            "Dhaka",
            "Khulna",
            "Mymensingh",
            "Rajshahi",
            "Rangpur",
            "Sylhet",
            
        ];
        foreach ($divisions as $division) {
            $existingDivision = DB::table('divisions')->where('title', $division)->first();
            if (!$existingDivision) {
                DB::table('divisions')->insert([
                    'uuid' => Str::uuid(),
                    'title' => $division,
                ]);
            } else {
                $this->command->info("Divisions '{$division}' already exists. Skipped.");
            }
        }
    }
}
