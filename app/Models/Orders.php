<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_date',
        'payment_mode',
        'TotalAmount',
        'ReferenceNumber',
    ];
}
