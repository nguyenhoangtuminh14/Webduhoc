<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'education_level',
        'country_id',
        'service_id',
        'datetime', 
        'approved', 
        
    ];
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function service()
    {
        return $this->belongsTo(Services::class);
    }
}