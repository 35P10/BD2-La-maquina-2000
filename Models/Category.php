<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    protected $dates = ['deleted_at'];
    protected $table='categories';
    protected $hidden = ['created_at','updated_at'];
    
    protected $dateFormat=['Y-m-d'];
    
    public function getDateFormat(){
        return 'Y-d-m';
    }
    
}
