<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;

    protected $table = 'persona';
    public $timestamps = false;

    protected $casts = [
        'DNI_persona' => 'integer',
        'ID_sucursal' => 'integer',
        'created_at' => 'datetime:Y-m-d'
    ];
    protected  $primaryKey = 'DNI_persona';
    protected $fillable = [
        'DNI_persona',
        'ID_sucursal',
        'nombres',
        'apellidos',
        'telefono',
        'email'
    ];

}

