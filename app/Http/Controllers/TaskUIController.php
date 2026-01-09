<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskUIController extends Controller
{
    public function landing()
    {
        return view('exercises.landing');
    }

    public function form()
    {
        return view('exercises.form');
    }

    public function dashboard()
    {
        return view('exercises.admin-dashboard');
    }

    public function profile()
    {
        return view('exercises.user-profile');
    }
}
