<?php

use App\Person;
use Carbon\CarbonImmutable;
use function Spatie\PestPluginTestTime\testTime;

test('someone is greeted', function ($firstName, $lastName, $names, $birthday, $isBirthday) {
    $person = new Person($firstName, $lastName, $birthday);
    expect($person->greet())->toContain($names);

    $expectedGreeting = $isBirthday ? 'Happy Birthday' : 'Hello';
    expect($person->greet())->toContain($expectedGreeting);
})->with([
    ['Max', 'Mustermann', 'Max Mustermann!'],
    ['Maria', 'Musterfrau', 'Maria Musterfrau!'],
])->with([
    // [birthday, is greeted with happy birthday]
    [CarbonImmutable::today(), true],
    [CarbonImmutable::yesterday(), false],
]);

it('can get the right age for Max', function() {
    testTime()->freeze('2022-02-01 01:00:00');
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));
    $this->assertEquals(32, $person->age());
});

it('greets a person with Happy Birthday on their birthday', function() {
    testTime()->freeze('2022-01-01 01:00:00');
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));
    $this->assertSame('Happy Birthday, Max Mustermann!', $person->greet());
});

it('gets the right days until the birthday', function() {
    testTime()->freeze('2022-01-01 01:00:00');
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-05'));
    $this->assertSame(4, $person->daysUntilBirthday());
});

it('gets the right days until the birthday when the day is the birth day', function() {
    testTime()->freeze('2022-01-01 01:00:00');
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));
    $this->assertSame(0, $person->daysUntilBirthday());
});

it('gets the right days until the birthday when the day is one day after the birth day', function() {
    testTime()->freeze('2022-01-02 01:00:00');
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));
    $this->assertSame(364, $person->daysUntilBirthday());
});

it('set the last name of a person after creating them', function () {
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));

    expect($person->lastName)->toBe('Mustermann');

    $person->setLastName('Musterbube');

    expect($person->lastName)->toBe('Musterbube');
});
