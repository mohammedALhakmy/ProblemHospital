<?php


namespace App\Interfaces\Dashboard;


interface PatientInterface
{



    public function index();

    public function store($request);


    public function show($id);

    public function update($request);
}
