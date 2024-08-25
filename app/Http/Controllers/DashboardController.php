<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   // In your DashboardController.php
    public function studentDashboard()
    {
        $landlordsCount = User::where('role', 'landlord')->count();
        $studentsCount = User::where('role', 'student')->count();

        return view('student.dashboard', compact('landlordsCount', 'studentsCount'));
    }

    public function landlordDashboard()
    {
        $landlordsCount = User::where('role', 'landlord')->count();
        $studentsCount = User::where('role', 'student')->count();

        return view('landlord.dashboard', compact('landlordsCount', 'studentsCount'));
    }

}

