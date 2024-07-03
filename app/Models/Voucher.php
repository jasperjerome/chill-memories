<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'pickup_from',
        'drop_to',
        'user_id',
        'hotel_location',
        'hotel_name',
        'other',
        'cab',
    ];

    public function booking() {
        return $this->belongsTo(Booking::class, 'booking_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
