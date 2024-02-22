<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //defino los atributos en masa
    protected $fillable = ['fecha_hora', 'paciente_id' , 'medico_id'];

    //la fecha_hora la quiero almacenar en tipo datetime, por lo que la transformo haciendo uso del casting
    protected $casts = [
        'fecha_hora' => 'datetime:Y-m-d H:i',
    ];

    //ahora establezco las relaciones entre modelos

    public function medico(){ //la clase cita pertenece a clase medico, porq la flecha va hacia este sentido
        return $this->belongsTo(Medico::class);
    }


    public function paciente(){ //la clase cita pertenece a clase paciente, porq la flecha va hacia este sentido (un paciente tiene cita)
        return $this->belongsTo(Paciente::class);
    }

    public function medicamento(){ //la clase medicamento pertenece a clase paciente, porq la flecha va hacia este sentido, pero al ser relacion n-n, hay que poner tabla intermedia
        return $this->belongsToMany(Medicamento::class)->using(CitaMedicamento::Class)->withPivot('tomas_dia', 'comentarios', 'inicio', 'fin');
    }




}
