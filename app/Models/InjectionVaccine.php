<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InjectionVaccine extends Model
{
    use HasFactory;
    protected $fillable = ['vaccination_number', 'vaccination_time', 'lot_number', 'vaccination_type_id', 'vaccine_certificate_id', 'vaccination_site_id'];

    public function vaccinationSite()
    {
        return $this->belongsTo(VaccinationSite::class, 'vaccination_site_id');
    }
    public function vaccineCertificate()
    {
        return $this->belongsTo(VaccineCertificate::class, 'vaccine_certificate_id');
    }
    public function vaccinationType()
    {
        return $this->belongsTo(MedicalHistory::class, 'vaccination_type_id');
    }
}