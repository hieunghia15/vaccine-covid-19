<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'nation_id'];

    public function vaccinationTypes()
    {
        return $this->hasMany(VaccinationType::class);
    }
    public function nation()
    {
        return $this->belongsTo(Nation::class, 'nation_id');
    }
}