<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productimg extends Model
{
    use HasFactory;

    protected $fillable = ['prod_id', 'image'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
