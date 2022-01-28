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
        if ($this->birthDay?->isSameAs('m-d', today())) {
            return "Happy Birthday, {$this->fullName()}!";
        }

        return "Hello, {$this->fullName()}!";
    }

    public function age(): int
    {
        return $this->birthDay->diffInYears(today());
    }
}
