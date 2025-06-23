<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    # Un estudiante tiene muchas notas
    public function notes()
    {
        return $this->hasMany(Notes::class);
    }
}
