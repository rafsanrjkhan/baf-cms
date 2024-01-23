<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "1" => "Officer",
            "2" => "Airman",
            "3" => "CYPHER ASSISTANT",
            "4" => "Education Instructor",

        ];
        foreach ($categories as $key => $category) {
            $existingCategory = DB::table('categories')->where('title', $category)->first();
            if (!$existingCategory) {
                DB::table('categories')->insert([
                    'uuid' => Str::uuid(),
                    'title' => $category,
                    'callup_letter_order' => $key,
                ]);
            } else {
                $this->command->info("Categories '{$category}' already exists. Skipped.");
            }
        }
    }
    /**
     * Function to get the default callup letter order based on category (customize as needed).
     */
    protected function getDefaultCallupLetterOrder($category)
    {
        // You can customize this function to set default callup letter orders based on categories.
        // For example, you can use a switch statement or an associative array to map categories to orders.
        // This is just a placeholder; replace it with your actual logic.
        switch ($category) {
            case 'Officer':
                return 1;
            case 'Airman':
                return 2;
            case 'CYPHER ASSISTANT':
                return 3;
            case 'Education Instructor':
                return 4;
                // Add more cases as needed...
            default:
                return 0; // Default value if no match is found.
        }
    }
}
