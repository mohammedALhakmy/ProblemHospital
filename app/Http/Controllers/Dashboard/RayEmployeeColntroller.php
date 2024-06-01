<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\RayEmployeeRepository;
use App\Repository\Dashboard\RayEmployeeInterface;
use Illuminate\Http\Request;

class RayEmployeeColntroller extends Controller
{
    private $Ray_Employee;

    public function __construct(RayEmployeeRepository $Ray_Employee)
    {
        $this->Ray_Employee = $Ray_Employee;
    }

    public function index()
    {
       return $this->Ray_Employee->index();
    }


  public function destroy($id)
    {
        return $this->Ray_Employee->destroy($id);
    }

    public function store(Request $request)
    {
        return $this->Ray_Employee->store($request);
    }


    public function update(Request $request, $id)
    {
        return $this->Ray_Employee->update($request,$id);
    }
}
