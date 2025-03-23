<?php

namespace App\Http\Requests\Register;

use Spatie\LaravelData\Data;

class RegisterRequest extends Data
{
    public function __construct(public readonly string $name, public readonly string $email){}
}
