<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'title',
        'desc',
        'img',
    ];

    public function getImgAttribute($value)
    {
        return $value != "" ? url('') . config('global.IMG_PATH') . '/assets/uploads/ad_imgs/' . $value : '';
    }
}
