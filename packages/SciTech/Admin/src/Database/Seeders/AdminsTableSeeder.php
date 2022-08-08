<?php

namespace SciTech\Admin\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('admins')->delete();

        DB::table('admins')->insert([
            'id'         => 1,
            'name'       => 'Example',
            'email'      => 'admin@example.com',
            'password'   => Hash::make('admin123'),
            'status'     => 1,
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
