<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxpayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'tpin',
        'business_certificate_number',
        'trading_name',
        'mobile_number',
        'email',
        'business_registration_date',
        'physical_location'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
