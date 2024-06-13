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
        return $this->hasOne(Destination::class);
    }
}
