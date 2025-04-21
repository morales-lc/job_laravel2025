<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usersinfo')->insert([
            [
                'id' => Str::uuid(),
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'sex' => 'Male',
                'birthday' => '1979-01-01',
                'username' => 'admin',
                'email' => 'admin@itelec3.test',
                'password' => Hash::make('admin123'),
                'user_type' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => Str::uuid(),
                'first_name' => 'Sheena',
                'last_name' => 'Doe',
                'sex' => 'Female',
                'birthday' => '1996-04-27',
                'username' => 'sheena',
                'email' => 'sheena_doe@itelec3.test',
                'password' => Hash::make('sheena123'),
                'user_type' => 'Customer',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
