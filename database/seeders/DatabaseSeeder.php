<?php

namespace Database\Seeders;

use SciTech\Admin\Database\Seeders\DatabaseSeeder as AdminDatabaseSeeder;
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
        $this->call(AdminDatabaseSeeder::class);
    }
}
