<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {

        $user = User::create([
            'name' => $request->validated()['name'],
            'surname' => $request->validated()['surname'],
            'email' => strtolower($request->validated()['email-register']),
            'password' => Hash::make($request->validated()['password'])
        ]);

        Auth::login($user);

        return redirect()->route('show.dashboard');
    }

    public function login(LoginFormRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('show.dashboard');
        }

        return back()->withErrors([
            'email' => 'Email is not valid.',
            'password' => 'Password is not valid.',
        ])->onlyInput('email', 'password');
    }

    public function logout(Request $request)
    {
        Auth::logout();


        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');
    }
}
