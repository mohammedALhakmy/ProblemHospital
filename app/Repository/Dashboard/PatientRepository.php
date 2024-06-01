<?php


namespace App\Repository\Dashboard;


use App\Interfaces\Dashboard\PatientInterface;
use App\Models\Patient;
use App\Models\Invoice;
use App\Models\ReceiptAccount;
use App\Models\PatientAccount;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class PatientRepository implements PatientInterface
{


    public function index()
    {
        $Patients = Patient::latest()->orderBy('id','DESC')->get();
        return view('Dashboard.Patient.index',compact('Patients'));
    }

/*
    public function store($request)
    {


         try {
           $Patients = new Patient();
           $Patients->email = $request->email;
           $Patients->password = Hash::make($request->phone);
           $Patients->date_birth = $request->date_birth;
           $Patients->phone = $request->phone;
           $Patients->gender = $request->gender;
           $Patients->blood_group = $request->blood_group;
           $Patients->name = $request->name;
           $Patients->address = $request->address;
//           dd($Patients);
           $Patients->save();
       }

       catch (\Exception $e) {
           return redirect()->back()->withErrors(['error' => $e->getMessage()]);
       }
    }*/
    public function store($request)
    {
        Patient::create([
            'email' => $request->email,
            'password' => Hash::make($request->phone),
            'date_birth' => $request->date_birth,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'blood_group' => $request->blood_group,
            'name' => $request->name,
            'address' => $request->address,
        ]);
    }

    public function update($request)
    {
        $Patient = Patient::findOrFail($request->id);
        $Patient->email = $request->email;
        $Patient->date_birth = $request->date_birth;
        $Patient->phone = $request->phone;
        $Patient->gender = $request->gender;
        $Patient->blood_group = $request->blood_group;
        $Patient->save();
        // insert trans
        $Patient->name = $request->name;
        $Patient->address = $request->address;
        $Patient->save();
    }

   public function Show($id)
    {
        $Patient = patient::findorfail($id);
        $invoices = Invoice::where('patient_id', $id)->get();
        $receipt_accounts = ReceiptAccount::where('patient_id', $id)->get();
        $Patient_accounts = PatientAccount::where('patient_id', $id)->get();

        return view('Dashboard.Patient.show', compact('Patient', 'invoices', 'receipt_accounts', 'Patient_accounts'));
    }

}
