<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'categories_id',
        'cars_id',
        'location',
        'first_mile_price',
        'after_first_mile_price',
        
    ];

     protected $table = 'price';

    public function cars()
    {
        return $this->belongsTo(Category::class, 'cars_id_id');

    }

}
