<?php

use App\Models\Post;

test('it can render homepage', function (){

    $post = Post::factory()->create();

    $this->get('/')
        ->assertSee($post->title)
        ->assertDontSee($post->title . ' fake');
});

