<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcoursPlanningController extends Controller
{
    public function index()
    {
        return view('concours-planning');
    }
    
}
