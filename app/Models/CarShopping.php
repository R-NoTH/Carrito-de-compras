<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarShopping extends Model
{
    use HasFactory;
    protected $fillable = ['quantity', 'status','product_id'];


    public function product(){
        return $this->belongsTo(Product::class);
    }
}
