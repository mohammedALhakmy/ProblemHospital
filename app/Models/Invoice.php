<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ["invoice_type", "invoice_date", "patient_id", "doctor_id", "section_id", "Group_id", "Service_id", "price",
        "discount_value", "tax_rate", "tax_value", "total_with_tax", "type", "invoice_status"];

    public function Service(){
        return $this->belongsTo(Service::class,'Service_id');
    }


    public function Patient(){
        return $this->belongsTo(Patient::class,'patient_id');
    }



    public function Doctor(){
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
}
