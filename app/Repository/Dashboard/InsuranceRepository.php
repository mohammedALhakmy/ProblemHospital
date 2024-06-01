<?php
namespace App\Repository\Dashboard;

use App\Interfaces\Dashboard\InsuranceInterface;
use App\Models\Insurance;

class  InsuranceRepository implements  InsuranceInterface{


    public function index()
    {
       $Insurances = Insurance::latest()->orderBy('id','DESC')->get();
       return view( 'Dashboard.Insurance.index',compact('Insurances'));
    }


    public function store($request)
    {
        try {
            $insurances = new Insurance();
            $insurances->insurance_code = $request->insurance_code;
            $insurances->discount_percentage = $request->discount_percentage;
            $insurances->Company_rate = $request->Company_rate;
            $insurances->status = 1;
            $insurances->save();

            // insert trans
            $insurances->name = $request->name;
            $insurances->notes = $request->notes;
            $insurances->save();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        if (!$request->has('status'))
            $request->request->add(['status' => "0"]);
        else
            $request->request->add(['status' => "1"]);

        $insurances = Insurance::findOrFail($request->id);

        $insurances->update($request->all());

        // insert trans
        $insurances->name = $request->name;
        $insurances->notes = $request->notes;
        $insurances->save();
    }
}
