<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan role admin sudah ada di database
        $adminRole = Role::where('name', 'admin')->first();

        if (!$adminRole) {
            $adminRole = Role::create(['name' => 'admin']);
        }

        // Buat user admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // Gantilah dengan password yang aman
            'role_id' => $adminRole->id,
        ]);
    }
}
