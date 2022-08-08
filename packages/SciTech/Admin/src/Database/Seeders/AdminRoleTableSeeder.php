<?php

namespace SciTech\Admin\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminRoleTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('model_has_roles')->delete();

        $user = DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'SciTech\Admin\Models\Admin',
            'model_id' => 1,
        ]);
    }
}
