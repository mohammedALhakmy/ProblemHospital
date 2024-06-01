<?php
namespace App\Interfaces\Dashboard;

interface AmbulanceInterface{


    public function index();



    public function store($request);


    public function update($request);
}
