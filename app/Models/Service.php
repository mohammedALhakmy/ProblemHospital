<?php /** @noinspection ALL */

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model implements TranslatableContract
{
    use HasFactory,Translatable;
    public $translatedAttributes = ['name','description'];
    protected $fillable = ["price", "description", "status"];
}
