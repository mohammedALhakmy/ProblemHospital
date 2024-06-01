<?php


namespace App\Interfaces\Dashboard\Dashboard_Ray_Employee;


interface InvoicesInterface2
{
   public function index();
    public function completed_invoices();
    public function edit($id);
    public function update($request,$id);
    public function view_rays($id);

    public function create();

}
