<?php
namespace App\Repository\Dashboard\Section;

use App\Interfaces\Dashboard\Section\SectionInterface;
use App\Models\Section;

class SectionRepository implements SectionInterface{


    public function index()
    {
        $sections = Section::latest()->orderBy('id','DESC')->get();
        return view('Dashboard.section.index',compact('sections'));
    }

    public function store($request)
    {
        Section::create([
           'name' => $request->name,
           'description' => $request->description,
        ]);
    }

    public function update($request)
    {
        $section = Section::findOrfail($request->id);
        $section->update([
           'name' =>$request->name,
           'description' =>$request->description,
        ]);
    }

    public function destroy($request)
    {
        Section::findOrfail($request->id)->delete();
        $notification = [
            'message' => 'تم حذف البيانات بنجاح',
            'alert-type' => 'error'
        ];
        return redirect()->back()->with($notification);
    }
}
