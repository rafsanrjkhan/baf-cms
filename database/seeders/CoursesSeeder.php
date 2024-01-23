<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            "Test Course",
            "77 BAFA",
            "78 BAFA",
            "79 BAF",
        ];
        foreach ($courses as $course) {
            $existingCourse = DB::table('courses')->where('title', $course)->first();
            if (!$existingCourse) {
                DB::table('courses')->insert([
                    'uuid' => Str::uuid(),
                    'title' => $course,
                ]);
            } else {
                $this->command->info("Courses '{$course}' already exists. Skipped.");
            }
        }
    }
}
