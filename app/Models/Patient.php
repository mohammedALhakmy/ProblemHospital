<?php /** @noinspection ALL */

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable implements TranslatableContract
{
    use HasFactory,Translatable;


    protected $table = 'patients';
    public $translatedAttributes = ["name", "address","patient_id","locale"];
    public $fillable = ["email","name", "address","patient_id","locale","password","date_birth","phone", "gender","blood_group"];
}


