<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';

    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'telefono',
        'direccion',
        'empresa_id',
        'cargo_id'
    ];

    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa');
    }

    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargo');
    }

}
