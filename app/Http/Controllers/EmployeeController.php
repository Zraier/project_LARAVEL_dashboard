<?php

namespace App\Http\Controllers;

use App\Models\VoyUser;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    public function EmployeeDashboard() {
        return view('employee.employee_index');
            
        }

    public function Employeecalendar() {
        return view('employee.employee_calendar');
            
    }

    public function Employeeplan() {
        return view('employee.employee_plan');
            
    }

    public function EmployeeTrips($id) {
        $data= VoyUser::where('id_emp', $id)->get();
        return view('employee.employee_trips',compact('data'));
            
    }

    public function StorePlanEmployee(Request $request) {
        $newvoy= new VoyUser();
        $newvoy->pays = $request->country;
        $newvoy->programme = $request->programme;
        $newvoy->date = $request->date;
        $newvoy->duree = $request->duree;
        $newvoy->id_emp = $request->id_emp;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename= $newvoy->pays.'_'. $newvoy->id_emp.'_'.date('Ymd').'.jpg';
            $file->move(public_path('upload/employee_image/Trips_image'),$filename);
            $newvoy['image']=$filename;
        }
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
