<?php

use App\Person;
use Carbon\CarbonImmutable;
use function Spatie\PestPluginTestTime\testTime;

test('max is greeted', function () {
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));
    $this->assertSame('Hello, Max Mustermann!', $person->greet());
});

test('maria is greeted', function () {
    $person = new Person('Maria', 'Musterfrau', CarbonImmutable::parse('1990-01-01'));
    $this->assertSame('Hello, Maria Musterfrau!', $person->greet());
});

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
