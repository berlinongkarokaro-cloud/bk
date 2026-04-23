<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    protected function sendLockoutResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'email' => ['Too many attempts. Please try again later.'],
        ]);
    }
}