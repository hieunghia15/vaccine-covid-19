<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationHistory extends Model
{
    use HasFactory;
    protected $fillable = ['injection_registration_id'];

    public function injectionRegistration()
    {
        return $this->belongsTo(InjectionRegistration::class, 'injection_registration_id');
    }
}