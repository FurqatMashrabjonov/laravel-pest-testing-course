<?php

use App\Mail\TestMail;
use App\Models\Post;
use \Illuminate\Support\Facades;
it('can store new post', function (){
    expect(Post::query()->count())->toBe(0);
    $this->post('/post', [
        'title' => 'My Post',
        'description' => fake()->text
    ])
    ->assertSessionHasNoErrors()
    ->assertRedirect('/');

    expect(Post::query()->first()->title == 'My Post')->toBe(true)
        ->and(Post::query()->count())->toBe(1);


});
