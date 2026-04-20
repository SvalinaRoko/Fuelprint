<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController
{
    public function showDashboard()
    {
        return view('pages.dashboard');
    }

    public function showCreateListing()
    {
        return view('pages.createListing');
    }
}
