<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'phone',
        'password',
        'fullname',
        'birthday',
        'gender',
        'address',
        'identification',
        'email',
        'ward_id',
    ];

    /**
     * The attributes that should be hidden for serialization.z
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function vaccineCertificates()
    {
        return $this->hasMany(VaccineCertificate::class);
    }
    public function medicalHistories()
    {
        return $this->hasMany(MedicalHistory::class);
    }
    public function injectionRegistrations()
    {
        return $this->hasMany(InjectionRegistration::class);
    }
    public function healthDeclarations()
    {
        return $this->hasMany(HealthDeclaration::class);
    }

    public function ward()
    {
        return $this->belongsTo(Ward::class, 'ward_id');
    }
}