<?php

use App\Models\Like;
use App\Models\Post;

test('it can render homepage', function (){
    $post = Post::factory()
        ->has(Like::factory()->count(5))
//        ->hasLikes(5) //has{Relationship Method Name}
    ->create();

    expect($post->likes)->toHaveCount(5);
});

