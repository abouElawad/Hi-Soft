<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;
    protected $fillable = ['name','logo','image','url','description'];

   

    public function getImageAttribute($value)
    {
        return 'storage/' . $value;
    }
    public function getLogoAttribute($value)
    {
        return 'storage/' . $value;
    }
}
