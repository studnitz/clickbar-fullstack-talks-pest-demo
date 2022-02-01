<?php

use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

use function Pest\Laravel\get;

uses(LazilyRefreshDatabase::class);

get('/persons')
    ->assertSee('First Name')
    ->assertSee('Last Name')
    ->assertSee('Birthday');
