<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard\PatientInterface;
use App\Models\Invoice;
use App\Models\Laboratorie;
use App\Models\Ray;
use App\Models\ReceiptAccount;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    private $Patient;

    public function __construct(PatientInterface $Patient)
    {
        $this->Patient = $Patient;
    }

    public function index()
    {
        return $this->Patient->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.patients.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->Patient->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         return $this->Patient->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        return $this->Patient->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

     public function invoices(){

        $invoices = Invoice::where('patient_id',auth('patient')->user()->id)->get();
        return view('Dashboard.patients.invoices',compact('invoices'));
    }

    public function laboratories(){

        $laboratories = Laboratorie::where('patient_id',auth('patient')->user()->id)->get();
        return view('Dashboard.patients.laboratories',compact('laboratories'));
    }

    public function viewLaboratories($id){

        $laboratorie = Laboratorie::findorFail($id);
        if($laboratorie->patient_id !=auth()->user()->id){
            return redirect()->route('404');
        }
        return view('Dashboard.dashboard_LaboratorieEmployee.invoices.patient_details', compact('laboratorie'));
    }

    public function rays(){

        $rays = Ray::where('patient_id',auth('patient')->user()->id)->get();
        return view('Dashboard.patients.rays',compact('rays'));
    }

    public function viewRays($id)
    {
        $rays = Ray::findorFail($id);
        if($rays->patient_id !=auth('patient')->user()->id){
            return redirect()->route('404');
        }
        return view('Dashboard.dashboard_RayEmployee.invoices.patient_details', compact('rays'));
    }

    public function payments(){

        $payments = ReceiptAccount::where('patient_id',auth('patient')->user()->id)->get();
        return view('Dashboard.patients.payments',compact('payments'));
    }
}
