<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $fillable = 
    [               
        'CPer_Socios',
        'Cod_Socios',
        'CClu_Socios',
        'CCuo_Socios',
        'SoFu_Socios',
        'FAlt_Socios',
        'Carg_Socios',
        'FBaj_Socios',
        'Moti_Socios',        
    ];

    public function persona()
    {
        return $this->belongsTo(Persona::class, 'CPer_Socios', 'Cod_Personas');
    }
} 
