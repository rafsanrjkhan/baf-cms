<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CallUpLettersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $callUpLettersData = [
            [
                'category_id' => 1,
                'encloser' => '39834003-40-394adfadlf',
                'letter_date' => '0000-00-00',
                'reporting_datetime' => '60 hours december2010',
                'money_carried_limit' => '399',
                'stump_money' => '200',
                'commanding_officer_name' => 'Abdul Halim',
                'designation' => 'Officer',
                'designation2' => 'Commanding Officer',
                'course_or_entry_no' => 1,
            ],
            [
                'category_id' => 2,
                'encloser' => '39834003-40-394adfadlf',
                'letter_date' => '0000-00-00',
                'reporting_datetime' => '60 hours december2010',
                'money_carried_limit' => '399',
                'stump_money' => '200',
                'commanding_officer_name' => 'Abdul Halim',
                'designation' => 'Officer',
                'designation2' => 'Commanding Officer',
                'course_or_entry_no' => 2,
            ],
            [
                'category_id' => 3,
                'encloser' => '39834003-40-394adfadlf',
                'letter_date' => '0000-00-00',
                'reporting_datetime' => '60 hours december2010',
                'money_carried_limit' => '399',
                'stump_money' => '200',
                'commanding_officer_name' => 'Abdul Halim',
                'designation' => 'Officer',
                'designation2' => 'Commanding Officer',
                'course_or_entry_no' => 3,
            ],
            [
                'category_id' => 4,
                'encloser' => 'j76878747749879rwetwe',
                'letter_date' => '2017-01-12',
                'reporting_datetime' => '1430 hrs on 30 March 2014',
                'money_carried_limit' => '5000',
                'stump_money' => '300',
                'commanding_officer_name' => 'Abdul halim',
                'designation' => 'Officer',
                'designation2' => 'Commanding Officer',
                'course_or_entry_no' => 4,
            ],
        ];

        foreach ($callUpLettersData as $callUpLetterData) {
            $this->insertCallUpLetter($callUpLetterData);
        }
    }

    /**
     * Insert a single call-up letter into the database.
     *
     * @param array $data
     */
    protected function insertCallUpLetter(array $data): void
    {
        DB::table('call_up_letter_info')->insert([
            'category_id' => $data['category_id'],
            'encloser' => $data['encloser'],
            'letter_date' => $data['letter_date'],
            'reporting_datetime' => $data['reporting_datetime'],
            'money_carried_limit' => $data['money_carried_limit'],
            'stump_money' => $data['stump_money'],
            'commanding_officer_name' => $data['commanding_officer_name'],
            'designation' => $data['designation'],
            'designation2' => $data['designation2'],
            'course_or_entry_no' => $data['course_or_entry_no'],
            'uuid' => Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 0,
            'updated_by' => 0,
        ]);
    }
}
