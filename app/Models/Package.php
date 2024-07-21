<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'package_name',
        'price_per_month',
        'max_users',
        'charge_users',
        'max_class_options',
        'class_update_frequency',
        'certificate_included',
        'free_consultation',
        'dedicated_assistant',
        'full_support',
    ];
}
