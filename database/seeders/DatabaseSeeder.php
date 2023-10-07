<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \App\Models\User;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{

        User::Factory(5)->create();
        Post::factory(50)->create();
        // Category::factory(5)->create();

        // \App\Models\User::factory(10)->create();
        $this->call([
            // UserSeeder::class,
            // PostSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
