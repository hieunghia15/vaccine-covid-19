<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalHistory extends Model
{
    use HasFactory;

    protected $fillable = ['symtom', 'status', 'user_id', 'medical_id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function medicals()
    {
        return $this->belongsTo(Medical::class, 'medical_id');
    }

    public function injectionRegistration()
    {
        return $this->hasMany(InjectionRegistration::class);
    }
}