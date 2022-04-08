<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationInformation extends Model
{
    use HasFactory;
    protected $fillable = ['health_insurance _number', 'date_injection', 'job', 'ethnic', 'nationality', 'priority_group_id'];

    public function priorityGroup()
    {
        return $this->belongsTo(PriorityGroup::class, 'priority_group_id');
    }

    public function injectionRegistration()
    {
        return $this->hasMany(InjectionRegistration::class);
    }
}