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
        return $this->hasMany(Package::class, 'destination_id');
    }

    public function itinerary() {
        return $this->hasMany(Itinerary::class);
    }
    public function getFeatureImgAttribute($value)
    {
        return $value != "" ? url('') . config('global.IMG_PATH') . '/assets/uploads/feature_imgs/' . $value : '';
    }
    public function getBreadcrumbImgAttribute($value)
    {
        return $value != "" ? url('') . config('global.IMG_PATH') . '/assets/uploads/breadcrumb_imgs/' . $value : '';
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
