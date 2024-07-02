<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_id',
        'user_id',
        'package_id',
        'name',
        'email',
        'amount',
        'payment_method',
        'payment_status',
        'if_card',
    ];
}
