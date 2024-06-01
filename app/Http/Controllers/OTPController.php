<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
class OTPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.verify');
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
    public function store(Request $request)
    {
        //
        $now = Carbon::now();
        $user = auth()->user();
        if ($now->diffInMinutes($user->expire_at) >= 3) {
            $this->code =null;
            $this->expire_at = null;
        }
        if ($request->input('code') == $user->code){
            $user->resetCode();
            return redirect()->route('dashboard.user');
        }else{
            return redirect()->back()->withErrors(['code'=>'😭😭😭😭😭😭😭😭💪💪💪💪💪']);
        }
    }

    /**
     * Display the specified resource.
     */
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
    public function destroy(string $id)
    {
        //
    }
}
