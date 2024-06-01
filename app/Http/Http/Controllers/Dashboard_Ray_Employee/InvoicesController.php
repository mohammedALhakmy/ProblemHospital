<?php

namespace App\Http\Controllers\Dashboard_Ray_Employee;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\Dashboard_Ray_Employee\InvoicesInterface2;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    private $Ray_Employee;

    public function __construct(InvoicesInterface2 $Ray_Employee)
    {
        $this->Ray_Employee = $Ray_Employee;
    }

    public function index()
    {
       return $this->Ray_Employee->index();
    }

    public function completed_invoices()
    {
        return $this->Ray_Employee->completed_invoices();
    }


    public function create()
    {
        return $this->Ray_Employee->create();
    }



    public function edit($id)
    {
        return $this->Ray_Employee->edit($id);
    }

    public function view_rays($id)
    {
        return $this->Ray_Employee->view_rays($id);
    }


    public function update(Request $request, $id)
    {
        return $this->Ray_Employee->update($request,$id);
    }


    public function destroy($id)
    {
        //
    }
}
