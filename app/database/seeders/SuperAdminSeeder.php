<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'Abdul Rehman', 
            'email' => 'admin@email.com',
            'password' => Hash::make('12345678')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'Ali', 
            'email' => 'ali@email.com',
            'password' => Hash::make('12345678')
        ]);
        $admin->assignRole('Admin');

        // Creating Load Manager User
        $loadManager = User::create([
            'name' => 'Nouman', 
            'email' => 'nj@email.com',
            'password' => Hash::make('12345678')
        ]);
        $loadManager->assignRole('Manager');
    }
}