<?php

use App\Models\Person;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

use function Pest\Laravel\get;

uses(LazilyRefreshDatabase::class);

get('/persons')
    ->assertSee('First Name')
    ->assertSee('Last Name')
    ->assertSee('Birthday');

it('shows the details of a person', function() {
    $person = Person::factory()->create();

    get('/persons')
        ->assertSeeInOrder([$person->first_name, $person->last_name, $person->age]);
});

it('shows the details of multiple persons', function () {
    [$person1, $person2] = Person::factory()->count(2)->create();

    get('/persons')
        ->assertSeeInOrder([
            $person1->first_name, $person1->last_name, $person1->age,
            $person2->first_name, $person2->last_name, $person2->age,
        ]);
});
