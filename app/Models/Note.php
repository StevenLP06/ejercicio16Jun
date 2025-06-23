<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    # Una nota pertenece a un estudiante
    public function students()
    {
        return $this->belongsTo(Student::class);
    }

    # Una nota pertenece a una asignatura
    public function asignatures()
    {
        return $this->hasMany(Asignature::class);
    }
}
