<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['nombre', 'miligramos'];

    public function citas(){
        return $this->belongsToMany(Cita::class)->using(CitaMedicamento::class)->withPivot('tomas_dia', 'comentarios', 'inicio', 'fin');
    }
}
