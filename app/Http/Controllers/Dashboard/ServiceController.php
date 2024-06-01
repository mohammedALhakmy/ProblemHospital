<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\ServiceInterface;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    private $Service;

    public function __construct(ServiceInterface $Service)
    {
        $this->Service = $Service;
    }


    public function index()
    {
        return $this->Service->index();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        return $this->Service->store($request);
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return $this->Service->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
