<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\EmailValidateRequest;
use App\Http\Requests\Register\RegisterRequest;
use Illuminate\Routing\Controller;

final class RegisterController extends Controller
{
    public function registerEmail(RegisterRequest $request):void{
        dd($request->toArray());
    }
    
    public function emailValidate(EmailValidateRequest $request):void{
            dd($request->toArray());
    }
}
