<?php

namespace App\Models;

class Post
{

    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug"   => "judul-post-pertama",
            "author" => "Lectzz",
            "body"   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet magni mollitia fugiat dicta ea in eveniet optio asperiores vitae adipisci accusantium iste repellendus neque, at, modi similique. Voluptates perferendis quibusdam vero quam eligendi ut in similique sint quae, ea blanditiis repudiandae. Omnis dolores autem minus asperiores dolorem earum placeat, aspernatur iure dicta libero nihil iusto aliquam, tenetur quis doloribus animi? Eos praesentium magni, exercitationem similique quam nesciunt, rem saepe id minima incidunt assumenda culpa soluta, vel omnis temporibus consequuntur deleniti."
        ],
        [
            "title"  => "Judul Kedua",
            "slug"   => "judul-post-kedua",
            "author" => "Octavyan Putra Ramadhan",
            "body"   => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore praesentium, unde corrupti deserunt, eius consequuntur nesciunt quas voluptate doloremque a dolor sapiente delectus, architecto corporis! Dolor voluptatibus ab nostrum aliquid minus dolore temporibus est similique quod, eligendi amet magnam itaque id suscipit unde, harum optio qui molestias neque totam illo sit libero. Sed eius placeat nisi ratione. Quo atque consequatur, suscipit beatae similique cupiditate, voluptatem dolorum porro, veritatis numquam iste voluptates fugiat alias optio libero maiores quibusdam magnam officia! Maxime voluptate labore minima qui quaerat, dolore at explicabo eveniet eligendi inventore cupiditate aut libero, nobis officiis cum facere neque nihil!"
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }


    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }

}
