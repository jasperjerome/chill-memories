<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'feature_img',
        'breadcrumb_img',
        'wheather',
        'seo_title',
        'meta_desc',
        'desc',
        'long_desc',
        'video_link',
        'images',
    ];

    public function packages() {
        return $this->hasMany(Package::class);
    }

    public function itinerary() {
        return $this->hasMany(Itinerary::class);
    }
}
