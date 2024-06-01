<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\AmbulanceInterface;
use Illuminate\Http\Request;

class AmbulanceController extends Controller
{
    private  $ambulance;

    public function __construct(AmbulanceInterface $ambulance)
    {
        $this->ambulance = $ambulance;
    }

    public function index()
    {
        return $this->ambulance->index();

    }

    public function store(Request $request)
    {
        return $this->ambulance->store($request);
    }


    public function update(Request $request)
    {
        return $this->ambulance->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
