<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusesController extends Controller
{
    public function campuses()
    {
        return view('campuses');
    }
    
}
