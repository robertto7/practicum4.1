<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'age',
        'contact',
        'actions',
        
    ];

    public function citasMedicas(){

        return $this->hasMany(CitaMedica::class);
        
    }


}
