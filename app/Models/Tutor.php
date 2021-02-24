<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'empresa_nombre',
        'tutor_nombre',
        'tutor_apellido1',
        'tutor_apellido2',
        'estado',
        'email',
        'phone',
        'pais',
        'provincia',
        'municipio',
    ];
    use HasFactory;
}
