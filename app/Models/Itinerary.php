<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination_id',
        'title',
        'desc',
    ];

    public function destination() {
        return $this->belongsTo(Destination::class);
    }
    
}
