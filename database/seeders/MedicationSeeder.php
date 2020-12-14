<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;



class MedicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medication_schedules')->insert([
            'id' => Str::uuid(),
            'tablet_users_id' => '3bb9fad8-0be9-4169-a159-a76357139a7b',
            'reference' => 'Paracetamol',
            'instruction' => 'Take 2 tablets with water',
            'start_date' => '12/12/20',
            'end_date'=> '16/12/20',
            'repeat'=> 'Daily',
            'prompt_time'=> '11:30 AM',
            'use_alert' =>false,
            'alert_sent' => false,
            'scheduled_by' => '09f0f807-69d8-410e-9170-01de125d956d',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            ]);
    }
}
