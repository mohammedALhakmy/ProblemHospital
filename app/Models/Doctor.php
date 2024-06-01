<?php /** @noinspection ALL */

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doctor extends Authenticatable implements TranslatableContract
{
    use HasFactory,Translatable;
    public $translatedAttributes = ['name','appointment'];
    protected $fillable = ["email", "email_verified_at",'name','section_id', "password", "expire_at", "code", "phone", "price", "remember_token"];

    protected  $guarded=[];
    public function image()
    {

        return $this->morphOne(Image::class, 'imageable');

    }


    public function section()
    {
        return $this->belongsTo(Section::class,'section_id');
    }

    public function doctorappointments()
    {
        return $this->belongsToMany(Appointment::class,'appointment_doctors');
    }

}
