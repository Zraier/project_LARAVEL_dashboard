<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AgencyController extends Controller
{
    public function AgencyDashboard() {
        return view('agency.agency_index');
            
        }

    public function Agencecalendar() {
        return view('agency.agency_calendar');
            
    }

    public function Agenceplan() {
        return view('agency.agency_plan');
            
    }
    
    public function Agencelogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
