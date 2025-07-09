<?php 


Namespace App\Models;
use Illuminate\Support\Arr;
class Post {
    public static function all() {
        return [[
        'id' => 1,
        'slug' => 'memulai-dengan-laravel',
        'title' => 'Memulai dengan Laravel',
        'author' => 'haski ',
        'content' => 'Laravel adalah framework PHP yang sangat populer untuk pengembangan aplikasi web. Dalam artikel ini, kita akan membahas cara memulai dengan Laravel, termasuk instalasi dan konfigurasi dasar.'
    ],
    [
        'id' => 2,
        'slug' => 'kekuatan-furry',
    'title' => 'kekuatan furry',
        'author' => 'haski ',
        'content' => 'Furry adalah subkultur yang merayakan karakter hewan antropomorfik. Dalam artikel ini, kita akan menjelajahi kekuatan furry dan bagaimana komunitas ini berkembang.'
]
    ];
    }
    public static function find($slug):array {
    //     return Arr::first(Post::all(), function ($post) use ($slug) {
    //         return $post['slug'] === $slug;
    //     });
    return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    if (!$post) {
        abort(404);
    }
    return $post;
}
}