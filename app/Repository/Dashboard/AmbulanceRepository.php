<?php
namespace App\Repository\Dashboard;

use App\Interfaces\Dashboard\AmbulanceInterface;
use App\Models\Ambulance;

class AmbulanceRepository implements AmbulanceInterface{


    public function index()
    {
        $ambulances = Ambulance::latest()->orderBy('id','DESC')->get();
        return view('Dashboard.Ambulance.index',compact('ambulances'));
    }

    public function store($request)
    {
//            dd($request->all());
            $ambulances = new Ambulance();
            $ambulances->car_number = $request->car_number;
            $ambulances->car_model = $request->car_model;
            $ambulances->car_year_made = $request->car_year_made;
            $ambulances->driver_license_number = $request->driver_license_number;
            $ambulances->driver_phone = $request->driver_phone;
            $ambulances->is_available = 1;
            $ambulances->car_type = $request->car_type;
            $ambulances->driver_name = $request->driver_name;
            $ambulances->notes = $request->notes;
            $ambulances->save();

        }


        public function update($request){

            if (!$request->has('is_available'))
                $request->request->add(['is_available' => 2]);
            else
                $request->request->add(['is_available' => 1]);

            $ambulance = Ambulance::findOrFail($request->id);

            $ambulance->update($request->all());

            // insert trans
            $ambulance->driver_name = $request->driver_name;
            $ambulance->notes = $request->notes;
            $ambulance->save();

        }
}
