<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa';

    protected $fillable = [
        'nit',
        'nombre',
        'direccion',
        'telefono'
    ];

    public function empleado()
    {
        return $this->hasMany('App\Models\Empleado', 'empresa_id', 'id');
    }
}
