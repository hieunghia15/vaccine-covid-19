<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthDeclaration extends Model
{
    use HasFactory;
    protected $fillable = ['move_location', 'signal', 'infected_covid19', 'people_country_covid19', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function injectionRegistration()
    {
        return $this->hasMany(InjectionRegistration::class);
    }
}