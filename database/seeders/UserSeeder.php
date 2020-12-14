<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\TabletUser;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => Str::uuid(),
            'tablet_users_id' => TabletUser::all()->random()->id,
            'name' => 'Project Leader',
            'full_name' => 'Dr Louise Finlayson',
            'familiar_name' => 'Louise',
            'role' => 'ProjectManager',
            'email' => 'lfinlays79@gmail.com',
        ]);
    }
}
