<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Quarry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'address',
        'material',
        'material_type',
        'gross_weight',
        'tar_weight',
        'net_weight',
        'payment_status',
        'payment',
        'material_delivery_status',
    ];
}
