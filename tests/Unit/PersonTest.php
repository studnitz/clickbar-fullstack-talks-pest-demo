<?php

use App\Person;
use Carbon\CarbonImmutable;

test('max is greeted', function () {
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));
    $this->assertSame('Hello, Max Mustermann!', $person->greet());
});

test('maria is greeted', function () {
    $person = new Person('Maria', 'Musterfrau', CarbonImmutable::parse('1990-01-01'));
    $this->assertSame('Hello, Maria Musterfrau!', $person->greet());
});

it('can get the right age for Max', function() {
    $person = new Person('Max', 'Mustermann', CarbonImmutable::parse('1990-01-01'));
    $this->assertEquals(32, $person->age());
});

it('greets a person with Happy Birthday on their birthday');
