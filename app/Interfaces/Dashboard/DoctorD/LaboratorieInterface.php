<?php


namespace App\Interfaces\Dashboard\DoctorD;


interface LaboratorieInterface
{
   public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
