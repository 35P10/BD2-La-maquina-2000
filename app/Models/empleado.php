<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    public $timestamps = false;

    
    protected $casts = [
        'DNI_empleado' => 'integer',
        'sueldo' => 'double'
    ];
    protected  $DNI_empleado = 'DNI_empleado';
    protected $fillable = [
        'DNI_empleado',
        'hora_entrada',
        'hora_salida',
        'sueldo',
        'password',
    ];
    
}
