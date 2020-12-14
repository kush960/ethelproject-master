<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\Project;

class TabletUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tablet_users')->insert([
            'id' => Str::uuid(),
            'projects_id' => Project::all()->random()->id,
            'name' => 'Test Tablet 1',
            'full_name' => 'Mrs Evelyn Montgomery',
            'familiar_name' => 'Evie',
            'gender' => 'F',
            'city' => 'Blairgowrie',
            'country' => 'UK',
            'postcode' => 'PH10 6UP',
            'language' => 'English',
            'timezone' => 'GMT',
            'volume' => 75,
            'power' => true,
            'kiosk' => true,
            'documents' => true,
            'calendar' => true,
            'videos' => false,
            'websites' => false,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),

        ]);
    }
}
