<?php

namespace App\Repository\Dashboard\DoctorD;

use App\Interfaces\Dashboard\DoctorD\InvoicesInterface;
use App\Models\Diagnostic;
use App\Models\Invoice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvoicesRepository implements InvoicesInterface{

 public function index()
    {
    $invoices = Invoice::where('doctor_id',Auth::user()->id)->where('invoice_status',1)->get();
        return view('Dashboard.Doctor.Invoice.index',compact('invoices'));
    }

    // قائمة المراجعات
    public function reviewInvoices()
    {
        $invoices = Invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 2)->get();
        return view('Dashboard.Doctor.Invoice.review_invoices', compact('invoices'));
    }

    // قائمة الفواتير المكتملة
    public function completedInvoices()

    {
        $invoices = Invoice::where('doctor_id', Auth::user()->id)->where('invoice_status', 3)->get();
        return view('Dashboard.Doctor.Invoice.completed_invoices', compact('invoices'));
    }

    public function show($id)
    {
        $patient_records = Diagnostic::where('patient_id',$id)->get();
        return view('Dashboard.Doctor.Invoice.patient_record', compact('patient_records'));
    /*    $rays = Ray::findorFail($id);
        if($rays->doctor_id !=auth()->user()->id){
            //abort(404);
            return redirect()->route('404');
        }

        return view('Dashboard.Doctor.invoices.view_rays', compact('rays'));
   */ }

    public function store($request)
    {
        DB::beginTransaction();

        try {

            $this->invoice_status($request->invoice_id,'3');
            $diagnosis = new Diagnostic();
            $diagnosis->date = date('Y-m-d');
            $diagnosis->diagnosis = $request->diagnosis;
            $diagnosis->medicine = $request->medicine;
            $diagnosis->invoice_id = $request->invoice_id;
            $diagnosis->patient_id = $request->patient_id;
            $diagnosis->doctor_id = $request->doctor_id;
            $diagnosis->save();

            DB::commit();
            session()->flash('add');
            return redirect()->back();
        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function create($request)
    {
   DB::beginTransaction();

        try {

            $this->invoice_status($request->invoice_id,3);
            $diagnosis = new Diagnostic();
            $diagnosis->date = date('Y-m-d');
            $diagnosis->review_date =$request->review_date;
            $diagnosis->diagnosis = $request->diagnosis;
            $diagnosis->medicine = $request->medicine;
            $diagnosis->invoice_id = $request->invoice_id;
            $diagnosis->patient_id = $request->patient_id;
            $diagnosis->doctor_id = $request->doctor_id;
            $diagnosis->save();

            DB::commit();
            session()->flash('add');
            return redirect()->back();
        }

        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

      public function invoice_status($invoice_id,$id_status){
        $invoice_status = Invoice::findorFail($invoice_id);
        $invoice_status->update([
            'invoice_status'=>$id_status
        ]);
    }

}
