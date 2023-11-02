<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

     protected $fillable = [
        'id',
        'categories_id',
        'name',
        'img',
        'model',
        'type',
        'seats',
        'ac',
        'description',
        'des',
        'first_mile_price',
        'after_first_mile_price',
        'driver_cab_details',
        'inclusion',
        'exclusion',
        'safety_guidelines',
        
    ];

    protected $table = 'cars';

    public function categories()
    {
        return $this->belongsTo(Category::class, 'categories_id');

    }

    public function searchForm()
    {
        return $this->hasOne(SearchForm::class);
    }
}
