<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            VitalQuestionSeeder::class,
            OrganisationSeeder::class,
            ProjectSeeder::class,
            TabletUserSeeder::class,
            UserSeeder::class,
        ]);
    }
}
