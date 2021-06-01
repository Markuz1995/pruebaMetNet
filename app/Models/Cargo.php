<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $table = 'cargo';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function empleado()
    {
        return $this->hasMany('App\Models\Empleado', 'cargo_id', 'id');
    }

}
