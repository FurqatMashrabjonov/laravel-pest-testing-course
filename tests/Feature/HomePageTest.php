<?php

test('it can render homepage', function (){
    $this->get('/')
        ->assertSee('My Blog')
        ->assertSee(App::version());
});

