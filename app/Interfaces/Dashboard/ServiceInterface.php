<?php
namespace  App\Interfaces\Dashboard;
interface ServiceInterface{



    public function index();

    public function store($request);


    public function update($request);
}
