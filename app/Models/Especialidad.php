<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $fillable = ['nombre'];

    public function medico(){ //la clase cita pertenece a clase medico, porq la flecha va hacia este sentido
        return $this->belongsTo(Medico::class);
    }}
