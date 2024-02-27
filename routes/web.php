<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//admin route

Route::middleware('auth','role:admin')->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'Admindashboard'])->name('admin.dashboard');
    //Entreprise
    Route::get('/admin/Entreprise', [AdminController::class, 'AdminEntreprise'])->name('admin.Entreprise');
    Route::get('/admin/AddEntreprise', [AdminController::class, 'AdminAddEntreprise'])->name('admin.AddEntreprise');
    Route::post('/admin/AddEntreprise', [AdminController::class, 'EntrepriseStore'])->name('admin.AddEnt');
    Route::get('/admin/Update/entreprise/{id_ent}', [AdminController::class, 'AdminUpdateEntreprise'])->name('admin.EntreprisePageUpdate');
    Route::post('/admin/Update/entreprise', [AdminController::class, 'EntrepriseUpdate'])->name('admin.EntrepriseUpdate');
    //Agence
    Route::get('/admin/Agency', [AdminController::class, 'AdminAgency'])->name('admin.Agency');
    Route::get('/admin/AddAgency', [AdminController::class, 'AdminAddAgency'])->name('admin.AddAgency');
    Route::post('/admin/AddAgency', [AdminController::class, 'AgencyStore'])->name('admin.AgencyStore');
    Route::get('/admin/Update/Agency/{id_agence}', [AdminController::class, 'AdminUpdateAgency'])->name('admin.AgencyPageUpdate');
    Route::post('/admin/Update/Agency', [AdminController::class, 'AgencyUpdate'])->name('admin.AgencyUpdate');
    //Employee
    Route::get('/admin/Employee', [AdminController::class, 'AdminEmployee'])->name('admin.Employee');
    Route::get('/admin/AddEmployee', [AdminController::class, 'AdminAddEmployee'])->name('admin.AddEmployee');
    Route::post('/admin/AddEmployee', [AdminController::class, 'EmployeeStore'])->name('admin.EmployeeStore');
    Route::get('/admin/Update/Employee/{id_emp}', [AdminController::class, 'AdminUpdateEmployee'])->name('admin.EmployeePageUpdate');
    Route::post('/admin/Update/Employee', [AdminController::class, 'EmployeeUpdate'])->name('admin.EmployeeUpdate');

    //admin profile
    Route::get('/admin/logout', [AdminController::class, 'Adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'Adminprofile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'Adminprofileupdate'])->name('admin.profile.update');
    Route::get('/admin/changePass', [AdminController::class, 'AdminPassword'])->name('admin.password');
    Route::post('/admin/changePass', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');


});

//agence route  

Route::middleware('auth','role:agence')->group(function(){

    Route::get('/agency/dashboard', [AgencyController::class,'AgencyDashboard'])->name('agency.dashboard');
    Route::get('/agence/logout', [AgencyController::class, 'Agencelogout'])->name('agence.logout');
    Route::get('/agence/Calendar', [AgencyController::class, 'Agencecalendar'])->name('agence.calendar');
    Route::get('/agence/Planing', [AgencyController::class, 'Agenceplan'])->name('agence.plan');
    Route::post('/agence/Planing', [AgencyController::class, 'StorePlan'])->name('store.plan');


});

//Employee route
Route::middleware('auth','role:employee')->group(function(){

    Route::get('/employee/dashboard', [EmployeeController::class,'EmployeeDashboard'])->name('Employee.dashboard');
    Route::get('/employee/logout', [EmployeeController::class, 'Employeelogout'])->name('Employee.logout');
    Route::get('/employee/Calendar', [EmployeeController::class, 'Employeecalendar'])->name('Employee.calendar');
    Route::get('/employee/Planing', [EmployeeController::class, 'Employeeplan'])->name('Employee.plan');
    Route::post('/employee/Planing', [EmployeeController::class, 'StorePlanEmployee'])->name('store.planemployee');


});


Route::get('/admin/login', [AdminController::class, 'Adminlogin'])->name('admin.login');

Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');