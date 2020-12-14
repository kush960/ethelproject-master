<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VitalQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vital_questions')->insert([
            'id' => Str::uuid(),
            'name' => 'systolic',
            'prompt' => 'Systolic',
            'category' => 'BloodPressure',
            'type' => 'Integer',
            'priority' => 1,
            'min' => 30,
            'max' => 250
        ]);
        DB::table('vital_questions')->insert([
            'id' => Str::uuid(),
            'name' => 'diastolic',
            'prompt' => 'Diastolic',
            'category' => 'BloodPressure',
            'type' => 'Integer',
            'priority' => 2,
            'min' => 30,
            'max' => 250
        ]);
        DB::table('vital_questions')->insert([
            'id' => Str::uuid(),
            'name' => 'oximetry',
            'prompt' => 'Oximetry (SPO2)',
            'type' => 'Integer',
            'priority' => 3,
            'min' => 1,
            'max' => 100
        ]);
        DB::table('vital_questions')->insert([
            'id' => Str::uuid(),
            'name' => 'pulse',
            'prompt' => 'Pulse (bpm)',
            'type' => 'Integer',
            'priority' => 4,
            'min' => 30,
            'max' => 200
        ]);
        DB::table('vital_questions')->insert([
            'id' => Str::uuid(),
            'name' => 'respiration',
            'prompt' => 'Respiration',
            'type' => 'Integer',
            'priority' => 5,
            'min' => 10,
            'max' => 60
        ]);
        DB::table('vital_questions')->insert([
            'id' => Str::uuid(),
            'name' => 'temperature',
            'prompt' => 'Temperature',
            'type' => 'Decimal',
            'priority' => 6,
            'min' => 35,
            'max' => 106
        ]);
        DB::table('vital_questions')->insert([
            'id' => Str::uuid(),
            'name' => 'blood_glucose',
            'prompt' => 'Blood Glucose',
            'type' => 'Decimal',
            'priority' => 7,
            'min' => 0.1,
            'max' => 25
        ]);
    }
}
