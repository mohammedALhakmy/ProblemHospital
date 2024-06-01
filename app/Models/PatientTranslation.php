<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientTranslation extends Model
{
    use HasFactory;
    protected $fillable = ["name", "address","patient_id"," locale"];
    protected $table = 'patient_translations';
}
