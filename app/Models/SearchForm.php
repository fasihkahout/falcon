<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;#
use App\Models\User;
use App\Models\Cars;

class SearchForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'pickup_destination',
        'dropoff_destination',
        'flight_arrival_time',
        'pickup_date',
        'pickup_time',
        'luggage',
        'adults',
        'childrens',
        'infants',
        'distance',
        'return_date',
        'return_time',
    ];

    protected $table = 'search_form';

     public function users()
     {
        return $this->belongsTo(User::class,'users_id','id');

    }

    public function cars()
     {
        return $this->belongsTo(Cars::class,'car_id','id');

    }
}
