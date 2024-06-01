<?php


use App\Http\Controllers\Dashboard\RayEmployeeColntroller;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoicesController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::middleware(['auth:ray_employee'])->group(function (){

       Route::get('dashboard/RayEmployee',[RayEmployeeColntroller::class,'store'])->name('dashboard.RayEmployees');
    });

    Route::resource('invoices_ray_employee', InvoicesController::class);
   Route::resource('ray_employee',RayEmployeeColntroller::class);

   Route::get('view_rays/{id}',[InvoicesController::class,'view_rays'])->name('view_rays');
   });
