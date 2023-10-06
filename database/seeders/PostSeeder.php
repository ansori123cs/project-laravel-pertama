<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Pantai Malang',
            'slug' => 'pantai-malang',
            'img' => 'pantai-1.jpg',
            'exerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.</p>',
            'category_id'=>'1',
            'user_id'=>'1'
            
            
        ]);
        DB::table('posts')->insert([
            'title' => 'Air Terjun Magetan',
            'slug' => 'air-terjun-magetan',
            'img' => 'gunung-1.jpg',
            'exerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.</p>',
            'category_id'=>'2',
            'user_id'=>'1'
            
            
        ]);
        DB::table('posts')->insert([
            'title' => 'Pantai Malang Selatan',
            'slug' => 'pantai-malang-selatan',
            'img' => 'pantai-2.jpg',
            'exerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, facere? Placeat, pariatur voluptates? Voluptate commodi quibusdam voluptatem. Iure sed nam molestias fugiat consectetur, ipsum accusamus dicta animi culpa aliquid, molestiae ipsa temporibus accusantium magni nobis harum dolorum quaerat ea enim sint consequatur aspernatur quam optio facere? Ipsum sequi voluptatem neque officia explicabo quaerat sint incidunt maiores minima molestias, ut vel tenetur nam assumenda aliquam nulla maxime! Velit blanditiis mollitia, amet beatae qui sunt ut possimus.</p>',
            'category_id'=>'1',
            'user_id'=>'1'
            
            
        ]);
    }
}
