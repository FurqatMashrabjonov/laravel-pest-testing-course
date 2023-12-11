<?php

use App\Models\Post;

it('adds a comment when a blog is created', function (){
    $post = Post::factory()->create([
        'comment' => 'great'
    ]);

    expect($post->comment)->toEqual('great');
});
