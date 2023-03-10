<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Algebra extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = "algebra";
    protected $primaryKey = "id";
    protected $fillable=[
        'id',
        'pregunta',
        'puntos',
        'img',
        'respuesta'        
    ];
}
