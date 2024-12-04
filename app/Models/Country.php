<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'flag', 'description'];

    

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
    public function scholarships()
    {
        return $this->hasMany(Scholarship::class);
    }
}