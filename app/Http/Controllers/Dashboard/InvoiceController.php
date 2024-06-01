<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\DoctorD\InvoicesInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
   private $invoices;

    public function __construct(InvoicesInterface $invoices)
    {
        $this->invoices = $invoices;
    }

    public function index()
    {
       return $this->invoices->index();
    }


    public function reviewInvoices()
    {
        return $this->invoices->reviewInvoices();
    }

    public function completedInvoices()
    {
        return $this->invoices->completedInvoices();
    }


    public function create(Request $request)
    {
        return $this->invoices->create($request);
    }


    public function store(Request $request)
    {
        return $this->invoices->store($request);
    }


    public function show($id)
    {
        return $this->invoices->show($id);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
