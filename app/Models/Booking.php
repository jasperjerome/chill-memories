<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'mobile',
        'destination',
        'no_of_adults',
        'no_of_children',
        'from',
        'to',
        'package_id',
        'source',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function package() {
        return $this->belongsTo(Package::class, 'package_id');
    }
}
