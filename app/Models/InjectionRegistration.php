<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InjectionRegistration extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'registration_infomation_id', 'medical_history_id', 'user_id', 'health_declaration_id', 'vaccination_consent_form_id'];

    public function registrationInfomation()
    {
        return $this->belongsTo(RegistrationInformation::class, 'registration_infomation_id');
    }
    public function vaccinationConsentForm()
    {
        return $this->belongsTo(VaccinationConsentForm::class, 'vaccination_consent_form_id');
    }
    public function healthDeclaration()
    {
        return $this->belongsTo(HealthDeclaration::class, 'health_declaration_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function medicalHistory()
    {
        return $this->belongsTo(MedicalHistory::class, 'medical_history_id');
    }

    public function registrationHistories()
    {
        return $this->hasMany(RegistrationHistory::class);
    }
}