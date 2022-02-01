<?php

use Illuminate\Foundation\Testing\LazilyRefreshDatabase;


uses(LazilyRefreshDatabase::class);

test('table headers are shown', function () {
    $response = $this->get('/persons');

    $response->assertOk()
        ->assertSee('First Name')
        ->assertSee('Last Name')
        ->assertSee('Birthday');
});
