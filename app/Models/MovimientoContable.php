<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovimientoContable extends Model
{
    use HasFactory;
    protected $table = 'movimientos_contables';
    // En MovimientoContable.php
    public function cuentaContable()
    {
        return $this->belongsTo(\App\Models\CuentaContable::class);
    }

}


