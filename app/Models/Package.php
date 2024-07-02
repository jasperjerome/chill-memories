<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'package_title',
        'breadcrumb_img',
        'feature_img',
        'images',
        'cost',
        'days',
        'nights',
        'itinerary',
        'desc',
    ];

    public function destination() {
        return $this->belongsTo(Destination::class, 'destination_id');
    }

    public function itineraries() {
        return $this->belongsToMany(Itinerary::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class, 'package_id');
    }
}
