<?php

use App\Person;

test('max is greeted', function () {
    $person = new Person('Max', 'Mustermann');
    $this->assertSame('Hello, Max Mustermann!', $person->greet());
});

test('maria is greeted', function () {
    $person = new Person('Maria', 'Musterfrau');
    $this->assertSame('Hello, Maria Musterfrau!', $person->greet());
});
