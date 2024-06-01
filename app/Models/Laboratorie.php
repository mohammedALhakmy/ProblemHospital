<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laboratorie extends Model
{
    use HasFactory;

    protected $fillable = [ "description", "invoice_id", "patient_id", "doctor_id","employee_id","description_employee","case"];

    public function doctor(){

        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
