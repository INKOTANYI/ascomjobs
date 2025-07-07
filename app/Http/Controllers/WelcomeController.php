<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Province;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        $provinces = Province::all();

        return view('welcome', compact('departments', 'provinces'));
    }
}
