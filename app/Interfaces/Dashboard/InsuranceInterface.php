<?php
namespace  App\Interfaces\Dashboard;

interface InsuranceInterface{


    public function index();


    public function store($request);


    public function update($request);
}
