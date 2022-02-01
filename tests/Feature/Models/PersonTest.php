<?php

use App\Models\Person;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;

use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\get;
use function Pest\Laravel\post;

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

it('creates a new person when posting to /persons', function () {
    post('/persons', [
        'first_name' => 'Max',
        'last_name' => 'Mustermann',
        'birthday' => '2000-01-01',
    ]);

    assertDatabaseCount('people', 1);
    assertDatabaseHas('people', [
        'first_name' => 'Max',
        'last_name' => 'Mustermann',
        'birthday' => '2000-01-01',
    ]);
});

it('throws a validation error when the birth date is in the future', function() {
    post('/persons', [
        'first_name' => 'Max',
        'last_name' => 'Mustermann',
        'birthday' => '3000-01-01',
    ])->assertInvalid(['birthday' => 'The birthday must be a date before or equal to today.']);
});
