<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DactorTableSeeder extends Seeder
{

    public function run(): void
    {
        $doctors = Doctor::factory()->count(30)->create();
//        foreach ($doctors as $doctor){
//            $Appointments = Appointment::all()->random()->id;
//            $doctor->doctorappointments()->attach($Appointments);
//        }
        $Appointments = Appointment::all();
                Doctor::all()->each(function ($doctor) use ($Appointments) {
           $doctor->doctorappointments()->attach(
              $Appointments->random(rand(1,7))->pluck('id')->toArray()
           );
       });
    }
}
