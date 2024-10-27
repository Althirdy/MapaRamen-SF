<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Void extends Model
{
    use HasFactory;

    protected $fillable = [
        'void_date',
        'payment_mode',
        'TotalAmount',
    ];
}
