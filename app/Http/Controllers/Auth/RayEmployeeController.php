<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RayEmployeeController extends Controller
{

    /*public function store(AdminLoginRequest $request)
    {
        if($request->authenticate()){
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::RayEmployees);
        }

        return redirect()->back()->withErrors(['name' => (trans('Dashboard/auth.failed'))]);

    }


    public function destroy(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }*/

    public function store(){
        dd("DDD");
        return view('Dashboard.ray_employee.dashboard');
    }
}
