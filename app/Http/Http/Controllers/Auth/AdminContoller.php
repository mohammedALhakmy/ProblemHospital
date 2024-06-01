<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard.labs.index');
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
//    public function store(AdminRequest $request): RedirectResponse
//    {
//
//        $request->authenticate();
//
//        $request->session()->regenerate();
////        dd($request);
//        return redirect()->intended(RouteServiceProvider::Admin);
//    }

    public function store(LoginRequest $request)
    {
        if ($request->insurance_type == "0") {
            if (auth()->guard('admin')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $notification = [
                    'message' => auth('admin')->user()->name.' تم تسجيل الدخول بنجاح اهلا وسهلا بك  ',
                    'alert-type' => 'info',
                ];
                return redirect()->intended(RouteServiceProvider::Admin)->with($notification);
            }else {
                return redirect()->back()->withInput($request->only(['email','password','insurance_type']))->withErrors([
                    'password' => 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.',
                ]);
            }
        }

        else if ($request->insurance_type == "2") {
            if (auth()->guard('doctor')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $notification = [
                    'message' => auth('doctor')->user()->name.' تم تسجيل الدخول بنجاح اهلا وسهلا بك  ',
                    'alert-type' => 'info',
                ];
                return redirect()->intended(RouteServiceProvider::Doctor)->with($notification);
            }else {
                return redirect()->back()->withInput($request->only(['email','password','insurance_type']))->withErrors([
                    'password' => 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.',
                ]);
            }
        }

        else if ($request->insurance_type == "4") {
            if (auth()->guard('lab')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $notification = [
                    'message' => auth('lab')->user()->name.' تم تسجيل الدخول بنجاح اهلا وسهلا بك  ',
                    'alert-type' => 'info',
                ];
//                dd($request->all());
                return redirect()->intended(RouteServiceProvider::labs)->with($notification);
            }else {
                return redirect()->back()->withInput($request->only(['email','password','insurance_type']))->withErrors([
                    'password' => 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.',
                ]);
            }
        }
else if ($request->insurance_type == "5") {
            if (auth()->guard('patient')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $notification = [
                    'message' => auth('patient')->user()->name.' تم تسجيل الدخول بنجاح اهلا وسهلا بك  ',
                    'alert-type' => 'info',
                ];
                return redirect()->intended(RouteServiceProvider::patient)->with($notification);
            }else {
                return redirect()->back()->withInput($request->only(['email','password','insurance_type']))->withErrors([
                    'password' => 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.',
                ]);
            }
        }

        else if ($request->insurance_type == "3") {
            if (auth()->guard('ray_employee')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])) {
                $notification = [
                    'message' => auth('ray_employee')->user()->name.' تم تسجيل الدخول بنجاح اهلا وسهلا بك  ',
                    'alert-type' => 'info',
                ];
                 return view('Dashboard.ray_employee.dashboard')->with($notification);
                //return redirect()->intended(RouteServiceProvider::RayEmployees)->with($notification);
            }else {
                return redirect()->back()->withInput($request->only(['email','password','insurance_type']))->withErrors([
                    'password' => 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.',
                ]);
            }
        }

        else {
            if (auth('web')->attempt($request->only('email', 'password'))) {
                $request->session()->regenerate();
                $notification = [
                    'message' => auth('web')->user()->name.'تم تسجيل الدخول بنجاح اهلا وسهلا بك ',
                    'alert-type' => 'info',
                ];
                return redirect()->intended(RouteServiceProvider::HOME)->with($notification);
            }  else {
                    return redirect()->back()->withInput($request->only(['email','password','insurance_type']))->withErrors([
                        'password' => 'بيانات الاعتماد هذه لا تتطابق مع سجلاتنا.',
                    ]);
                }
        }
    }

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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
//        dd($request->all());
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
