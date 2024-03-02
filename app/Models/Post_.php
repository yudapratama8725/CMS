<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yuda Pratama",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur similique perferendis beatae quo totam in nobis molestias ducimus ipsum, veniam asperiores neque incidunt perspiciatis? Nisi exercitationem dolore inventore repellendus quisquam eius ad. Consequatur alias ipsum ex recusandae repellendus officia corrupti ab deleniti, rerum pariatur reiciendis vitae perspiciatis nesciunt commodi excepturi."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putu Yudap",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quidem, incidunt iure id optio tenetur. Quisquam magnam ipsum rem culpa labore quos repudiandae animi sequi officia magni corporis eaque quo debitis quia itaque repellendus enim, in, laborum deserunt! Veritatis vel aut soluta velit magni sapiente perferendis dolore. Enim itaque quis consequatur doloremque, hic laboriosam ipsam atque quisquam obcaecati beatae odit magni dignissimos temporibus distinctio? Tempora, nostrum porro ea, blanditiis accusamus eius dolorum modi tempore libero sequi fugit reprehenderit? Harum quae nisi natus, fugiat libero repellendus dolore? At nesciunt, laboriosam, harum fugit eos qui possimus quas quo nisi eveniet, repellendus ratione."
        ],
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();

        // $pos = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}


