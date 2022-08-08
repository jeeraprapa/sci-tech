<?php

namespace SciTech\Admin\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('admins')->delete();

        DB::table('roles')->delete();

        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Super Admin',
            'guard_name' => 'admin',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
