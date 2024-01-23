<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DistrictsDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            "Barguna",
            "Barisal",
            "Bhola",
            "Jhalokati",
            "Patuakhali",
            "Pirojpur",
            "Bandarban",
            "Brahmanbaria",
            "Chandpur",
            "Chittagong",
            "Comilla",
            "Feni",
            "Khagrachhari",
            "Lakshmipur",
            "Noakhali",
            "Rangamati",
            "Dhaka",
            "Faridpur",
            "Gazipur",
            "Gopalganj",
            "Kishoreganj",
            "Madaripur",
            "Manikganj",
            "Munshiganj",
            "Narayanganj",
            "Narsingdi",
            "Rajbari",
            "Shariatpur",
            "Tangail",
            "Bagerhat",
            "Chuadanga",
            "Jessore",
            "Jhenaidah",
            "Khulna",
            "Kushtia",
            "Magura",
            "Meherpur",
            "Narail",
            "Satkhira",
            "Jamalpur",
            "Mymensingh",
            "Netrakona",
            "Sherpur",
            "Bogra",
            "Joypurhat",
            "Naogaon",
            "Natore",
            "Chapainawabganj",
            "Pabna",
            "Rajshahi",
            "Sirajgonj",
            "Dinajpur",
            "Gaibandha",
            "Kurigram",
            "Lalmonirhat",
            "Nilphamari",
            "Panchagarh",
            "Rangpur",
            "Thakurgaon",
            "Habiganj",
            "Moulvibazar",
            "Sunamganj",
            "Sylhet",
            "Nawabganj"
        ];


        foreach ($districts as $district) {
            $existingDistrict = DB::table('districts')->where('title', $district)->first();
            if (!$existingDistrict) {
                DB::table('districts')->insert([
                    'uuid' => Str::uuid(),
                    'title' => $district,
                ]);
            } else {
                $this->command->info("District '{$district}' already exists. Skipped.");
            }
        }
    }
}
