<?php
namespace App\Repository\Dashboard;


use App\Interfaces\Dashboard\ServiceInterface;
use App\Models\Service;

class ServiceRepository implements  ServiceInterface{


    public function index()
    {
        $Services = Service::latest()->orderBy('id','DESC')->get();
        return view('Dashboard.Service.index',compact('Services'));
    }


    public function store($request)
    {
        try {
            $SingleService = new Service();
            $SingleService->price = $request->price;
            $SingleService->status = "1";
            $SingleService->save();

            // store trans
            $SingleService->description = $request->description;
            $SingleService->name = $request->name;
            $SingleService->save();


        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        $SingleService = Service::findOrFail($request->id);
        $SingleService->price = $request->price;
//        $SingleService->status = $request->status;
        $SingleService->save();

        // store trans
        $SingleService->description = $request->description;
        $SingleService->name = $request->name;
        $SingleService->save();

    }
}
