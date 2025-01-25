<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaMedica extends Model
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

        return 0;
    }
    
}
