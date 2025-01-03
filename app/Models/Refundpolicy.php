<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refundpolicy extends Model
{
    use HasFactory;

    protected $table = 'refund_policy';
    protected $fillable = [
        'title',
        'desc'
    ];
}
