<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Cars;

class Baggage extends Model
{
    use HasFactory;

     protected $fillable = [
        'id',
        'pickup_destination',
        'dropoff_destination',
        'length',
        'width',
        'height',
        'weight',
        'distance',
    ];

    protected $table = 'baggage';

     public function users()
     {
        return $this->belongsTo(User::class,'users_id','id');

    }

    public function cars()
     {
        return $this->belongsTo(Cars::class,'car_id','id');

    }
}
