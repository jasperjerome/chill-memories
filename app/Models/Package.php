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
    
    // Accessor for images attribute (array of images)
    public function getImagesAttribute($value)
    {
        if (!empty($value)) {
            $images = json_decode($value, true);
            $baseUrl = url('') . config('global.IMG_PATH') . '/assets/uploads/destination_imgs/';

            // Prepend base URL to each image filename
            foreach ($images as $key => $image) {
                $images[$key] = $baseUrl . $image;
            }

            return $images;
        }

        return [];
    }
}
