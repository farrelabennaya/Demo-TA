<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $adminRoleId = Role::where('name', 'admin')->first()->id;
        // $officerRoleId = Role::where('name', 'petugas')->first()->id;
        // $citizenRoleId = Role::where('name', 'warga')->first()->id;

        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('password'),
        //     'role_id' => $adminRoleId, // Use the role_id instead of role
        // ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'admin', // Assuming role is a string field in the users table
        ]);
    }
}
