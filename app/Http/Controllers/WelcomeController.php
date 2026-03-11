<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('pages.landing');
    }
    public function login()
    {
        return view('forms.login');
    }
    public function register()
    {
        return view('forms.register');
    }
}
