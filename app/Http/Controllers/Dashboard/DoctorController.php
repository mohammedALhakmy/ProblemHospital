<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\Doctor\DoctorInterface;
use App\Models\Admin;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private $Doctor;

    public function __construct(DoctorInterface $Doctor)
    {
        $this->Doctor = $Doctor;
    }

    public function index()
    {
        return $this->Doctor->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->Doctor->store($request);
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
//        $notifications = Admin::
        return $this->Doctor->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $this->Doctor->destroy($request);
    }
}
