<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoggedInController
{
    public function showMain()
    {
        return view('pages.main');
    }
}
