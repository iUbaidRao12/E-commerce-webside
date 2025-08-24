<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

         protected $fillable = ['cate_id', 'name', 'description', 'price', 'piece'];

    public function category()
    {
    return $this->belongsTo(Category::class ,'cate_id');
    }

    public function images()
    {
        return $this->hasMany(Productimg::class,'prod_id');
    }
}
