<?php
namespace App\Interfaces\Dashboard\Doctor;

interface  DoctorInterface{


    public function index();


    public function store($request);


    public function update($request);


    public function destroy($request);
}
