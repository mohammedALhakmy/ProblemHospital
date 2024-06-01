<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\Section\SectionInterface;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    private $section;


    public function __construct(SectionInterface $section)
    {
        $this->section = $section;
    }

    public function index()
    {
        return $this->section->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return $this->section->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request)
    {
        return $this->section->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $this->section->destroy($request);
    }
}
