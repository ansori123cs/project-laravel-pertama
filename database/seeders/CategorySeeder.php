<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Bulking tips',
            'slug' => 'bulking-tips',
        ]);
        DB::table('categories')->insert([
            'name' => 'Cutting tips',
            'slug' => 'cutting-tips',
        ]);
        DB::table('categories')->insert([
            'name' => 'Tips and Trick',
            'slug' => 'tips-and-trick',
        ]);
        DB::table('categories')->insert([
            'name' => 'Workout',
            'slug' => 'workout',
        ]);
    }
}
