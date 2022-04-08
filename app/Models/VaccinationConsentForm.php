<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationConsentForm extends Model
{
    use HasFactory;
    protected $fillable = ['status'];

    public function injectionRegistration()
    {
        return $this->hasMany(InjectionRegistration::class);
    }
}