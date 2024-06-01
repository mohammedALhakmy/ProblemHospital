<?php

use App\Events\MyEvent;
use App\Http\Controllers\Auth\AdminContoller;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\GroupInvoiceController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\LaboratorieController;
use App\Http\Controllers\Dashboard\LaboratorieEmployeeController;
use App\Http\Controllers\Dashboard\LaboratorieInvoiceController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\RayEmployeeColntroller;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\ServiceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use app\Livewire\CreateGroupService;

//Route::get('Dashboard_Admin',[DashboardController::class,'index']);
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    // Dashboard User
    Route::get('dashboard/User',[DashboardController::class,'create'])->middleware(['auth', 'verified', 'TOPFactor'])->name('dashboard.user');
    // End Dashboard User

        // Dashboard Admin
//    Route::get('dashboard/Admin',[DashboardController::class,'index'])->middleware(['auth:admin'])->name('dashboard.Admin');
        Route::get('dashboard/Admin',function (){
                //  event(new MyEvent('hello world',auth('admin')->user()->name));
        return view('Dashboard.index');
        })->middleware(['auth:admin'])->name('dashboard.Admin');

        /*

        Route::get('/test',function(){
    $data = ['patient'=>1,'invoice_id'=>57,'doctor_id'=>1];
    broadcast(new \App\Events\CreateInvoice($data));
    return "fired";
})->name('dashboard.Admin');


         */

            // Dashboard Doctor
    Route::get('dashboard/Doctor',[DashboardController::class,'store'])->middleware(['auth:doctor'])->name('dashboard.Doctor');


    Route::middleware(['auth:admin'])->group(function (){
        Route::post('Section/update',[SectionController::class,'update'])->name('Sections.update');
        Route::post('Section/destroy',[SectionController::class,'destroy'])->name('Sections.destroy');

        Route::resource('Section',SectionController::class);

        Route::post('Doctor/update',[DoctorController::class,'update'])->name('Doctors.update');
        Route::resource('Doctor',DoctorController::class);

        Route::post('Service/update',[ServiceController::class,'update'])->name('Services.update');
        Route::resource('Service',ServiceController::class);

        Route::view('Add_GroupService','livewire.GroupService.include_create')->name('Add_GroupService');


        Route::post('Insurances/update',[InsuranceController::class,'update'])->name('Insurances.update');
        Route::resource('Insurance',InsuranceController::class);

        Route::post('Ambulances/update',[AmbulanceController::class,'update'])->name('Ambulances.update');
        Route::resource('Ambulance',AmbulanceController::class);

        Route::post('Patients/update',[PatientController::class,'update'])->name('Patients.update');
        Route::resource('Patient',PatientController::class);

        Route::view('single_invoices','livewire.SingleInvoice.index')->name('single_invoices');

         Route::resource('ReceiptAccount',ReceiptAccountController::class);

         Route::resource('Payment',PaymentAccountController::class);

         Route::view('GroupInvoice','livewire.group-invoice.index')->name('GroupInvoice');
         Route::view('group_Print_single_invoices','livewire.group-invoice.print')->name('group_Print_single_invoices');

    });

    Route::resource('laboratorie_employee',LaboratorieEmployeeController::class);


    Route::get('dashboard/labs',[AdminContoller::class,'index'])->name('dashboard.labs');

    Route::resource('labs',LaboratorieInvoiceController::class);

    Route::get('dashboard/patient',[PatientController::class,'create'])->name('dashboard.patient');

        Route::get('invoices', [PatientController::class,'invoices'])->name('invoices.patient');
        Route::get('laboratories', [PatientController::class,'laboratories'])->name('laboratories.patient');
        Route::get('view_laboratories/{id}', [PatientController::class,'viewLaboratories'])->name('laboratories.view');
        Route::get('rays', [PatientController::class,'rays'])->name('rays.patient');
        Route::get('view_rays/{id}', [PatientController::class,'viewRays'])->name('rays.view');
        Route::get('payments', [PatientController::class,'payments'])->name('payments.patient');
    Route::fallback(function (){
        return redirect()->route('login');
    });


    // End Dashboard Admin

    Route::get('/',[AuthenticatedSessionController::class,'create'])->name('login');




    require __DIR__.'/auth.php';
});
