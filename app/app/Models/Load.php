<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Load extends Model
{
    use HasFactory;
    protected $fillable = [
        'origin',
        'destination',
        'load_weight',
        'load_length',
        'load_rate',
        'load_distance',
        'load_type',
        'payment_type',
        'load_id',
        'comment',
        'shipper',
        'pickup_date',
        'pickup_address',
        'pickup_phone',
        'person_at_pickup',
        'pickup_instructions',
        'cosignee',
        'dropoff_date',
        'dropoff_address',
        'delivery_phone',
        'person_at_dropoff',
        'dropoff_instructions',
    ];
    
}
