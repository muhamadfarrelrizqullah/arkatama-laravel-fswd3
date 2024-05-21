<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'no_telepon' => '088227032410',
            'level' => 'superadmin',
            'password' => Hash::make('superadmin'),
            'username' => 'aan'
        ]);

        User::create([
            'nama' => 'Admin',
            'email' => 'admin@gmail.com',
            'no_telepon' => '088227032410',
            'level' => 'admin',
            'password' => Hash::make('admin'),
            'username' => 'agus'
        ]);

        User::create([
            'nama' => 'User',
            'email' => 'user@gmail.com',
            'no_telepon' => '088227032410',
            'level' => 'user',
            'password' => Hash::make('user'),
            'username' => 'doni'
        ]);

        // User::factory(50)->create();
    }
}
