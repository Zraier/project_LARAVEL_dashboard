<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AgentController;

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
    return view('admin.admin_login');
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
    //Agence
    Route::get('/admin/Agency', [AdminController::class, 'AdminAgency'])->name('admin.Agency');
    Route::get('/admin/AddAgency', [AdminController::class, 'AdminAddAgency'])->name('admin.AddAgency');
    Route::post('/admin/AddAgency', [AdminController::class, 'AgencyStore'])->name('admin.AgencyStore');
    //Employee
    Route::get('/admin/Employee', [AdminController::class, 'AdminEmployee'])->name('admin.Employee');
    Route::get('/admin/AddEmployee', [AdminController::class, 'AdminAddEmployee'])->name('admin.AddEmployee');




    Route::get('/admin/logout', [AdminController::class, 'Adminlogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'Adminprofile'])->name('admin.profile');
    Route::post('/admin/profile', [AdminController::class, 'Adminprofileupdate'])->name('admin.profile.update');
    Route::get('/admin/changePass', [AdminController::class, 'AdminPassword'])->name('admin.password');
    Route::post('/admin/changePass', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');


});

    Route::middleware('auth','role:agent')->group(function(){

    Route::get('/agent/dashboard', [AgentController::class, 'Agentdashboard'])->name('agent.dashboard');

});

Route::get('/admin/login', [AdminController::class, 'Adminlogin'])->name('admin.login');

Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');