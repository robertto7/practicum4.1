<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    use HasFactory;

    // campos visibles 

    protected $fillable = [
        'fecha'
        'hora'
        'paciente_id'
        'enfermedad_id'
    ];

    // relacion de entidad con enfermedad
    
    public function enfermedad() {

        
            return $this->belongsTo(Enfermedad::class);
        };
    }
    
}
