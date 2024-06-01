<?php
namespace App\Interfaces\Dashboard\Section;

interface  SectionInterface{


    public function index();


    public function store($request);


    public function update($request);


    public function destroy($request);
}
