<?php
namespace App\Interfaces\Dashboard\DoctorD;

interface RayInterface{

    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
