<?php

namespace App;

class Person
{
    public function __construct(
        public string $firstName,
        public string $lastName,
    )
    { }

    public function greet(): string
    {
        return "Hello, {$this->firstName} {$this->lastName}!";
    }
}
