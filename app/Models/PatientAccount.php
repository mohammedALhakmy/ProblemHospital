<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientAccount extends Model
{
    use HasFactory;

    public $fillable = ["date","invoice_id","patient_id","receipt_account_id", "payment_id", "Debit", "credit"];

    public function invoice(){
        return $this->belongsTo(Invoice::class,'invoice_id');
    }
}
