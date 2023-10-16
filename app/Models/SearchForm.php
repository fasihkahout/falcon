<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;#
use App\Models\User;

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
    ];

    protected $table = 'search_form';
}
