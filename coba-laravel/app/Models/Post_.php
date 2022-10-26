<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Andrie Firmansyah",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste perspiciatis sint harum hic, nisi, nemo, necessitatibus dolores illo assumenda eligendi placeat eius cumque? Optio, nam quo. Minima dolorem asperiores repellat iure cum impedit, repellendus quasi aspernatur repudiandae iste soluta consequuntur, eligendi ipsam. Quae maxime rem id, reprehenderit ullam nihil aliquid quisquam, accusamus corrupti eveniet nemo temporibus pariatur sapiente minus molestiae velit est eos optio laudantium consequuntur? Error, id iure. Numquam non fugit doloribus rem illum et harum commodi corrupti nemo."
        ],
    
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Han",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis unde et id cumque amet nesciunt, distinctio vero odit dicta omnis totam deserunt beatae aut quasi nostrum! Esse blanditiis quam sed quod minima inventore eius incidunt fuga fugiat dolorem, omnis dignissimos explicabo quisquam nostrum porro dolor, quibusdam iure aut. Alias doloribus, maxime iste necessitatibus dolore, ut repudiandae nihil quae aliquam cum velit, tempore quas. Itaque quasi molestiae exercitationem cumque consectetur, impedit vel qui eius unde provident quidem facilis nam illum libero nobis voluptatibus ipsa animi ratione obcaecati. Ullam beatae mollitia asperiores minima animi nobis nesciunt repudiandae aliquam. Commodi perferendis iure iste."
        ]
    
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
