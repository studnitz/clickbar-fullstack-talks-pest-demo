<?php

namespace App;

use Carbon\CarbonImmutable;

class Person
{
    public function __construct(
        public string $firstName,
        public string $lastName,
        public ?CarbonImmutable $birthDay,
    )
    { }

    public function fullName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function greet(): string
    {
        return "Hello, {$this->fullName()}!";
    }

    public function age(): int
    {
        return $this->birthDay->diffInYears(today());
    }
}
