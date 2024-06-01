<?php


namespace App\Interfaces\Dashboard;


interface RayEmployeeRepository
{
 public function index();

    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
