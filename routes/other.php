<?php


use App\Http\Controllers\Dashboard\InvoiceController;
use App\Http\Controllers\Dashboard\LaboratorieController;
use App\Http\Controllers\Dashboard\PatienDetailController;
use App\Http\Controllers\Dashboard\RayController;
use App\Http\Controllers\Dashboard\RayEmployeeColntroller;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        Route::middleware(['auth:doctor'])->group(function (){
               //############################# completed_invoices route ##########################################
            Route::get('completed_invoices', [InvoiceController::class,'completedInvoices'])->name('completedInvoices');
            //############################# end invoices route ################################################

            //############################# review_invoices route ##########################################
            Route::get('review_invoices', [InvoiceController::class,'reviewInvoices'])->name('reviewInvoices');

            Route::post('add_review',[InvoiceController::class,'create'])->name('add_review');
            //############################# end invoices route #############################################

            Route::resource('Invoice',InvoiceController::class);


            Route::resource('ray',RayController::class);

            Route::get('PatienDetail/{id}',[PatienDetailController::class,'index'])->name('Patien_Detail');

            Route::resource('Laboratories',LaboratorieController::class);


        });


});
