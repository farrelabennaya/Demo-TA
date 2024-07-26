<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = ['admin', 'petugas', 'warga'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}