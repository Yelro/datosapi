<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $timestamps=false;
    public $table="personas"; 
    protected $fillable = ['nombre', 'apellido','cedula',];

}
