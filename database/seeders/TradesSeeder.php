<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TradesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trades = [
             "Aircraft Engineering",
             "Electrical and Instrument Engineering",
             "General Engineering",
             "Mechanical Transport Engineering",
             "Armament Engineering",
             "Radio Engineering",
             "Ground Signalling",
             "Radar Operating",
             "Life Saving Equipment",
             "Photography",
             "Air Traffic Control",
             "Education",
             "Cypher",
             "Meteorological",
             "Medical",
             "Secretarial",
             "Supply",
             "General Service",
             "Mechanical Transport Operator",
             "Provost",
             "Catering",
             "Musician",
             "Aircrew",
        ];
        foreach ($trades as $trade) {
            $existingTrade = DB::table('trades')->where('title', $trade)->first();
            if (!$existingTrade) {
                DB::table('trades')->insert([
                    'uuid' => Str::uuid(),
                    'title' => $trade,
                ]);
            } else {
                $this->command->info("Trades '{$trade}' already exists. Skipped.");
            }
        }
    }
}
