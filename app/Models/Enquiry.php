<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
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
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
