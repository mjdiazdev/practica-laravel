<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaContable extends Model
{
    use HasFactory;
    protected $table = 'cuentas_contables';

    public function tipoCuenta()
    {
        return $this->belongsTo(\App\Models\TipoCuentaContable::class);
    }

    public function clasificacion()
    {
        return $this->belongsTo(\App\Models\ClasificacionContable::class);
    }
}
