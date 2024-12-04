<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'amount', 
        'requirements', 
        'type', 
        'field_id', 
        'deadline', 
        'application_guidelines', 
        'country_id'
    ];

    public function field()
    {
        return $this->belongsTo(Field::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}