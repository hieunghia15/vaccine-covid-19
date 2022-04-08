<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriorityGroup extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function registrationInfomations()
    {
        return $this->hasMany(RegistrationInformation::class);
    }
}