<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovimientoContable;
use PDF;

class ReporteContableController extends Controller
{
    public function libroDiarioPDF()
    {
        $movimientos = MovimientoContable::with('cuentaContable')
            ->orderBy('created_at')
            ->get();

        $pdf = PDF::loadView('reportes.libro-diario', compact('movimientos'));

        return $pdf->download('libro_diario.pdf');
    }
}
