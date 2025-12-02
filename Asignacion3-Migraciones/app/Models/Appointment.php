<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable = ['patient_id', 'doctor_id', 'scheduled_at', 'status', 'notes'];

    protected $casts = [
        'scheduled_at' => 'datetime',
    ];

    /**
     * Una cita pertenece a un paciente
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    /**
     * Una cita pertenece a un doctor
     */
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }
}
