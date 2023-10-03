<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post 
{
    // use HasFactory;
    private static $blog_post=[[
        "title"=>"Pantai Malang",
        "slug"=>"pantai-malang",
        "location"=>"https://maps.app.goo.gl/SKg71DZxbrVz6pqa8",
        "img"=>"pantai-1.jpg",
        "item"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam.
        
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam."
    ],[
        "title"=>"Pantai Malang Barat",
        "slug"=>"pantai-malang-barat",
        "location"=>"https://maps.app.goo.gl/SKg71DZxbrVz6pqa8",
        "img"=>"pantai-2.jpg",
        "item"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam.
        
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam."
    ],[
        "title"=>"Pantai Tuban",
        "slug"=>"pantai-tuban",
        "location"=>"https://maps.app.goo.gl/SKg71DZxbrVz6pqa8",
        "img"=>"pantai-1.jpg",
        "item"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam.
        
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam."
    ],[
        "title"=>"Air Terjun Magetan",
        "slug"=>"air-terjun-magetan",
        "location"=>"https://maps.app.goo.gl/SKg71DZxbrVz6pqa8",
        "img"=>"gunung-1.jpg",
        "item"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dolores, cum fuga, aut eos vel aspernatur assumenda veritatis, incidunt laudantium impedit dolor minus nulla ad provident suscipit odit optio iste obcaecati? Iste distinctio libero, optio sit temporibus sint et ipsam culpa atque eum iusto beatae asperiores neque, maxime dolorem id recusandae repudiandae autem voluptas pariatur incidunt nihil? Nobis provident eaque itaque sed odio incidunt fuga eos! Consequatur fugiat dicta nisi iure, quo ea eos voluptatem ex dolor quia itaque magnam."
    ]
    ];
    public static function all(){
        return collect(self::$blog_post);
    }
    public static function find($slug){
        $posts=static::all();
        // $post=[];
        // foreach($posts as $p){
        //     if($p["slug"]===$slug){
        //         $post=$p;
        //     }
        // }
        return $posts->firstWhere('slug',$slug);
    }
}
