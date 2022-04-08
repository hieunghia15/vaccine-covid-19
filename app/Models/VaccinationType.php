<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationType extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'applicable_age', 'effection', 'injection_dose', 'injection_time', 'manufacture_id'];

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class, 'manufacture_id');
    }

    public function injectionVaccines()
    {
        return $this->hasMany(InjectionVaccine::class);
    }
}