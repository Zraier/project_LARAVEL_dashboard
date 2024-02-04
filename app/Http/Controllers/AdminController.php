<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use App\Models\agencie;
use App\Models\entreprise;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;



class AdminController extends Controller
{
    public function AdminDashboard() {
       

    return view('admin.index');
        
    }

    //Agency section///////////////////////////////////////////
    public function AdminAgency() {   
        $AgencieData = agencie::all();
        return view('admin.agency.admin_show_agencie', compact('AgencieData'));

        }

    public function AdminAddAgency() {

        return view('admin.agency.admin_add_agencie');
            
        }

    public function AgencyStore(Request $request) {
         // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:agencies,email', // Unique email validation
                'username' => 'required|string|unique:agencies,username', // Unique username validation
                'password'  => 'required|confirmed',
                'password_confirmation'=>'required',
            ]);
            // Create a new Agence instance and fill it with the validated data
            $agencie = new agencie();
            
            $agencie->name = $validatedData['name'];
            $agencie->username = $validatedData['username'];
            $agencie->email = $validatedData['email'];
            $agencie->tel = $request->tel;
            $agencie->address = $request->address;
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename= $agencie->name.date('Ymd').'.jpg';
                $file->move(public_path('upload/agence_image'),$filename);
                $agencie['photo']=$filename;
            }
            // Save the agence to the database
            $agencie->save();
             // Create a new USER instance and fill it with the validated data
            $user = User::where('username', $validatedData['username'])->first();
            if (!$user) {
                $user = new User();
                $user->username = $validatedData['username'];
                $user->password = hash::make($validatedData['password']);
                $user->role = 'agence';
                $user->save();
            }
            
            //notification
            $notification = array(
                'message' => 'Agency Added Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect()->back()->with($notification);     
        }

    //Entreprise section///////////////////////////////////////////
    public function AdminEntreprise() {   
        $EntrepriseData = entreprise::all();
        return view('admin.entreprise.admin_show_entreprise', compact('EntrepriseData'));

        }

    public function AdminAddEntreprise() {

        return view('admin.entreprise.admin_add_entreprise');
            
        }

    public function EntrepriseStore(Request $request) {
         // Validate the incoming request data
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'domaine_id' => 'required|exists:domaines,id', // Ensure domaine_id exists in the domaines table
                'email' => 'required|email|unique:entreprises,email', // Unique email validation
                'username' => 'required|string|unique:entreprises,username', // Unique username validation
                'password'  => 'required|confirmed',
                'password_confirmation'=>'required',
            ]);
            // Create a new Entreprise instance and fill it with the validated data
            $entreprise = new Entreprise();
            
            $entreprise->name = $validatedData['name'];
            $entreprise->username = $validatedData['username'];
            $entreprise->email = $validatedData['email'];
            $entreprise->tel = $request->tel;
            $entreprise->address = $request->address;
            $entreprise->id_dom = $validatedData['domaine_id'];
            if ($request->file('photo')) {
                $file = $request->file('photo');
                $filename= $entreprise->name.date('Ymd').'.jpg';
                $file->move(public_path('upload/Entreprise_image'),$filename);
                $entreprise['photo']=$filename;
            }
            // Save the entreprise to the database
            $entreprise->save();
             // Create a new USER instance and fill it with the validated data
            $user = User::where('username', $validatedData['username'])->first();
            if (!$user) {
                $user = new User();
                $user->username = $validatedData['username'];
                $user->password = hash::make($validatedData['password']);
                $user->role = 'entreprise';
                $user->save();
            }
            
            //notification
            $notification = array(
                'message' => 'Entreprise Added Successfully',
                'alert-type'=> 'success'
    
            );
            return redirect()->back()->with($notification);     
        }

    //Employee section/////////////////
    public function AdminEmployee() {
    
        $EmployeeData = User::all();
        return view('admin.admin_show_Employee', compact('EmployeeData'));
            
        }

    public function AdminAddEmployee() {

        return view('admin.admin_add_Employee');
            
        }

    //Admin section
    public function Adminlogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }


    public function Adminlogin()
    {
        return view('admin.admin_login');
    }

    public function Adminprofile()
    {
        $username= auth::user()->username;
        $profileData = Admin::where('username', $username)->first();
        return view('admin.admin_profile', compact('profileData'));
    }

    public function Adminprofileupdate(Request $request)
    {
        $username= auth::user()->username;
        $data = Admin::where('username', $username)->first();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->tel = $request->phone;
        $data->address = $request->address;
        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename= $data->name.date('Ymd').'.jpg';
            $file->move(public_path('upload/admin_image'),$filename);
            $data['photo']=$filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin Profile Update Successfully',
            'alert-type'=> 'success'

        );
        return redirect()->back()->with($notification);
    }

    public function AdminPassword()
    {
        $id= auth::user()->id;
        $profileData = User::find($id); 
        return view('admin.admin_change_password',compact('profileData'));
    }

    public function AdminChangePassword(Request $request)
    {
        
        $id= auth::user()->id;
        $data = User::find($id);
        
        $request->validate(
        [
            'current_password' => 'required',
            'password'  => 'required|confirmed'
        ]
        );
        if (!Hash::check($request->current_password, auth::user()->password)) {
              $notification = array(
                'message' => 'Current Password Does Not Match!!',
                'alert-type'=> 'error');
                return redirect()->back()->with($notification);
        }
       //find ID then update his password with the password coming from request
            user::whereId(auth()->user()->id)->update([
                'password'=>hash::make($request->password)
            ]);

            // this works too but i wanted to try the previous one
            // $data->password = hash::make($request->password);
            // $data->save();
        $notification = array(
            'message' => 'Password Update Successfully',
            'alert-type'=> 'success'
        );
        return redirect()->back()->with($notification);

    }

}



