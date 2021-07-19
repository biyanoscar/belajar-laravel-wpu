<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    // use HasFactory;
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum beatae recusandae reiciendis fugiat quas provident ipsa ad sed neque fuga nobis culpa consectetur commodi corrupti, perspiciatis exercitationem velit autem, sunt dolorem ipsum eius labore. Eveniet earum assumenda, ex beatae expedita quis tenetur eius ut, sapiente quisquam voluptate debitis perspiciatis odit. Facere, exercitationem delectus! Corporis nulla quo soluta dolores nisi, inventore, rerum adipisci aperiam quae voluptates corrupti, voluptas aut quisquam cumque non tempora ad officia veritatis illo commodi nostrum sint sed?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim similique porro esse reiciendis aut eveniet excepturi soluta. Consequatur ipsa quis sunt magnam architecto obcaecati quae, fuga, inventore voluptatum velit odio. Itaque id assumenda debitis corporis eum impedit praesentium explicabo et unde dolorem nemo quasi suscipit totam veritatis asperiores, alias error dolor enim sequi, officia pariatur voluptatum provident? Itaque commodi eveniet error sed earum aut nam quo dolorem architecto cumque! Quae earum harum ea odit, cupiditate error nostrum dolores minima. Fugiat sit a reprehenderit voluptatibus repellendus sequi et velit, praesentium explicabo debitis corporis! Dolore recusandae earum unde quaerat in tempore eius?"
        ],
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
