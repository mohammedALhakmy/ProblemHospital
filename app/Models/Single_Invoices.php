<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Single_Invoices extends Model
{
    use HasFactory;
    protected $table = 'single_invoices';
    protected $fillable = [ "invoice_date", "patient_id", "doctor_id", "section_id", "Service_id", "price", "discount_value", "tax_rate", "tax_value", "total_with_tax", "type"];

    public function Service(){
        return $this->belongsTo(Service::class,'Service_id');
    }
}
