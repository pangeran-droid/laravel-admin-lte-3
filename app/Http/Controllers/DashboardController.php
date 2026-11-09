<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        $totalUsers = User::count();

        return view('dashboard', compact('title', 'totalUsers'));
    }

    public function about()
    {
        $title = 'About';
        $totalUsers = User::count();

        return view('about', compact('title', 'totalUsers'));
    }
}
