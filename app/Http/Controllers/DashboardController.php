<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function beginner()
    {
        return view('dashboard.beginner');
    }

 
    public function intermediate()
    {
        return view('dashboard.intermediate');  
    }

  
    public function advanced()
    {
        return view('dashboard.advanced');  
    }
}
