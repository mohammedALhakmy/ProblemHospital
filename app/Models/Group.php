<?php /** @noinspection ALL */

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model implements TranslatableContract
{
    use HasFactory,Translatable;

    public $translatedAttributes = [ "name", "notes"];
    protected $fillable = [ "total_before_discount", "value_discount", "total_after_discount", "tax_rate", "total_tax_rate"];

    public function group_service()
    {
        return $this->belongsToMany(Service::class,'group_services')->withPivot('quantity');
    }
}
