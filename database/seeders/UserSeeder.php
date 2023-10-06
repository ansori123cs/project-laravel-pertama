<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Ansori',
            'email' => 'ansori@gmail.com',
            'password' => Hash::make('12345')
        ]);
        DB::table('users')->insert([
            'name' => 'Paong',
            'email' => 'paong@gmail.com',
            'password' => Hash::make('54321')
        ]);
        DB::table('users')->insert([
            'name' => 'pikipik',
            'email' => 'pikipik@gmail.com',
            'password' => Hash::make('12543')
        ]);
    }
}
