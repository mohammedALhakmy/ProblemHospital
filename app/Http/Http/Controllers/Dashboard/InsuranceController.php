<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\InsuranceInterface;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{

    private $InsuranceInterface;


    public function __construct(InsuranceInterface $InsuranceInterface)
    {
        $this->InsuranceInterface = $InsuranceInterface;
    }

    public function index()
    {
        return $this->InsuranceInterface->index();
    }


    public function store(Request $request)
    {
        return $this->InsuranceInterface->store($request);
    }


    public function update(Request $request)
    {
        return $this->InsuranceInterface->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
