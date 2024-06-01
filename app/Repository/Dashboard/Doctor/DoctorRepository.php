<?php
namespace App\Repository\Dashboard\Doctor;

use App\Interfaces\Dashboard\Doctor\DoctorInterface;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Traits\UploadTrait;

class DoctorRepository implements DoctorInterface{

    use UploadTrait;

    public function index()
    {
        $Doctors = Doctor::with('doctorappointments')->get();
        $Sections = Section::latest()->orderBy('id','DESC')->get();
        $Appointments = Appointment::latest()->orderBy('id','DESC')->get();
        return view('Dashboard.Doctor.index',compact('Appointments','Sections','Doctors'));
    }

    public function store($request)
    {
        DB::beginTransaction();
        try {

            $doctor_id = Doctor::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'section_id' => $request->section_id,
//                'appointment' =>implode(',',$request->appointment),
                'price' => $request->price,
                'status' => "1",
                'password' => Hash::make($request->password),
            ]);


            // insert pivot tABLE
            $doctor_id->doctorappointments()->attach($request->appointments);
            //Upload img
            $this->verifyAndStoreImage($request,'filename','doctors','upload_image',$doctor_id->id,'App\Models\Doctor');
            DB::commit();
//            session()->flash('add');
//            return redirect()->route('Doctors.create');
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

   /* public function update($request)
    {
        DB::beginTransaction();

        try {

            $doctor = Doctor::where('id',$request->id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'section_id' => $request->section_id,
                'appointment' =>implode(',',$request->appointmentD2),
                'price' => $request->price,
            ]);

//            $doctor->name = $request->name;
//            $doctor->email = $request->email;
//            $doctor->phone = $request->phone;
//            $doctor->section_id = $request->section_id;
//            $doctor->price = $request->price;
//            $doctor->save();
//            $doctor->doctorappointments()->sync($request->appointmentD2);
            if ($request->has('photo')){
                if ($doctor->image){
                    $old_img = $doctor->image->filename;
                    $this->Delete_attachment('upload_image','doctors/'.$old_img,$request->id);
                }
                $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$request->id,'App\Models\Doctor');
            }

            DB::commit();
//            session()->flash('edit');
//            return redirect()->back();

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }*/


   /* public function update($request)
    {
        DB::beginTransaction();

        try {

            $doctor = Doctor::findorfail($request->id);

            $doctor->email = $request->email;
            $doctor->section_id = $request->section_id;
            $doctor->phone = $request->phone;
            $doctor->price = $request->price;
            $doctor->save();
            $doctor->name = $request->name;
            $doctor->save();

            $doctor->doctorappointments()->sync($request->appointmentD2);

            if ($request->has('photo')){
                if ($doctor->image){
                    $old_img = $doctor->image->filename;
                    $this->Delete_attachment('upload_image','doctors/'.$old_img,$request->id);
                }
                //Upload img
                $this->verifyAndStoreImage($request,'photo','doctors','upload_image',$request->id,'App\Models\Doctor');
            }

            DB::commit();
            session()->flash('edit');
            return redirect()->back();

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
*/

    public function update($request)
    {
        $id = $request->id;
        $edit = Doctor::findOrFail($id);
        $edit->updated_at = Carbon::now();
        $edit->email = $request->email;
        $edit->phone = $request->phone;
        $edit->section_id = $request->section_id;
        $edit->price = $request->price;
        $edit->name = $request->name;
        $edit->doctorappointments()->sync($request->appointmentD2);
        $currentLocale = app()->getLocale();
        foreach (config('translatable.locales') as $locale) {
            $edit->translateOrNew($locale)->name = ($locale === $currentLocale) ? $request->name : $edit->translate($locale)->name;
            $edit->save();
        }
    }
    public function destroy($request)
    {
        $delete_select_id = explode(",", $request->selected_items);
        foreach ($delete_select_id as $ids_doctors){
            $doctor = Doctor::findorfail($ids_doctors);
            if($doctor->image){
                $this->Delete_attachment('upload_image','doctors/'.$doctor->image->filename,$ids_doctors,$doctor->image->filename);
            }
        }
        Doctor::destroy($delete_select_id);
        $notification =[
          'message' => 'تم الحذف البيانات بنجاح',
          'alert-type' => 'error',
        ];

        return redirect()->route('Doctor.index')->with($notification);
    }

}
