<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    protected $fillable = ['name', 'lastname', 'phone', 'specialty_id'];

    /**
     * Un doctor pertenece a una especialidad
     */
    public function specialty(): BelongsTo
    {
        return $this->belongsTo(Specialty::class);
    }

    /**
     * Un doctor tiene muchas citas
     */
    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }
}
