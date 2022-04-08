<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;
    protected $fillable = ['description'];

    public function medicalHistories()
    {
        return $this->hasMany(MedicalHistory::class);
    }
}