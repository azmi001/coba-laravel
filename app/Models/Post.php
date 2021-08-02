<?php

namespace App\Models;

use phpDocumentor\Reflection\Types\Self_;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-posts-pertama",
            "author" => "Azmi Munif Hartono",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis animi vero eaque nam odit hic vitae optio debitis! Nobis quae quam nam earum illo maiores dolores, natus, officiis ullam ex a, odit quibusdam nisi possimus ipsa ad quod at voluptatibus ducimus esse dolorem fugiat officia impedit. Debitis, asperiores. Est blanditiis repellendus animi esse ipsa rerum corporis, nemo tempore totam hic eos autem rem, aliquid sequi tempora corrupti amet labore adipisci molestias ipsam? Recusandae iusto, est enim ipsum ab ad odio!"
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Muhammad Haikal Bintang",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius, saepe. Totam dolore, dicta fugiat culpa quasi labore magnam, aperiam sapiente eos voluptates iste, earum nostrum! Dolores voluptates, explicabo magnam quidem dicta porro blanditiis eius placeat veritatis atque alias ipsam repellat sint vel temporibus et mollitia dolore aliquid. Quasi similique at deserunt blanditiis repudiandae, nemo nobis facere vero rerum possimus quaerat reiciendis odio veniam ut quo totam atque sapiente aspernatur consectetur dolorum. In aut iusto magni placeat labore. Ut voluptatibus praesentium ullam eius possimus soluta aliquid, laboriosam dolor animi quos voluptatem beatae ea facilis doloribus. Eligendi voluptates alias libero aliquid ipsa!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
