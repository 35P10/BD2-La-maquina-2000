<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    public $timestamps = false;

    protected $casts = [
        'DNI_cliente' => 'integer'
    ];

    protected $fillable = [
        'DNI_cliente'
    ];
}
