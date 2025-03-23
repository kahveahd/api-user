<?php

namespace App\Http\Requests\Register;

use Spatie\LaravelData\Data;

class EmailValidateRequest extends Data
{
    public function __construct(public readonly string $code){}
}
