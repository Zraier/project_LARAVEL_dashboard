<?php

namespace App\Http\Controllers;

use App\Models\VoyAgency;
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

    public function AgenceTrips() {
        return view('agency.agency_trips');
            
    }
    
    public function StorePlan(Request $request) {
        $newvoy= new VoyAgency();
        $newvoy->pays = $request->country;
        $newvoy->programme = $request->programme;
        $newvoy->date = $request->date;
        $newvoy->duree = $request->duree;
        $newvoy->id_agence = $request->id_agence;
        $newvoy->save();
     
        return redirect()->back(); 
        
            
    }
    
    public function Agencelogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
