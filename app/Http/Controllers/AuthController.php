<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

final class AuthController extends Controller
{
    public function login():void{
        dd("login");
    }
    public function logout():void{
        dd("logout");
    }
}
