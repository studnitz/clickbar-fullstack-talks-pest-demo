<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    public $casts = [
        'birthday' => 'immutable_date',
    ];

    public function getAgeAttribute(): int
    {
        return $this->birthday?->diffInYears(today()) ?? 0;
    }
}
