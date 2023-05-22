<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('student_registration');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
