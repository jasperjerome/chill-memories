<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Termsconditions extends Model
{
    use HasFactory;

    protected $table = 'terms_conditions';
    protected $fillable = [
        'title',
        'desc'
    ];
}
