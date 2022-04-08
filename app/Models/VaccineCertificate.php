<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineCertificate extends Model
{
    use HasFactory;
    protected $fillable = ['qrcode', 'user_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function injectionVaccines()
    {
        return $this->hasMany(InjectionVaccine::class);
    }
}