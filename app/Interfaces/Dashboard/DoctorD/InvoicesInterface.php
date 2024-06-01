<?php


namespace App\Interfaces\Dashboard\DoctorD;


interface InvoicesInterface
{
      // Get Invoices Doctor
    public function index();

    // Get reviewInvoices Doctor
    public function reviewInvoices();

    // Get completedInvoices Doctor
    public function completedInvoices();

    // View rays
    public function show($id);

    public function store($request);

    public function create($request);

}
