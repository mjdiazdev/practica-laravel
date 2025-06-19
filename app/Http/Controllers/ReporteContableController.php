<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MovimientoContable;
use Barryvdh\DomPDF\Facade\Pdf;

class ReporteContableController extends Controller
{
    public function libroDiarioPDF(Request $request)
    {
        $fecha = $request->input('fecha'); // Espera algo como '2025-06-19'

        $movimientos = MovimientoContable::with('cuentaContable')
            ->whereDate('created_at', $fecha)
            ->orderBy('created_at')
            ->get();

        // Agrupar por movimiento_id y movimiento_type para la numeración
        $agrupados = $movimientos->groupBy(fn($mov) => $mov->movimiento_type . '-' . $mov->movimiento_id);

        // Totales
        $totalDebe = $movimientos->where('tipo', 'debe')->sum('monto');
        $totalHaber = $movimientos->where('tipo', 'haber')->sum('monto');

        $pdf = Pdf::loadView('reportes.libro-diario', compact('agrupados', 'totalDebe', 'totalHaber', 'fecha'));

        return $pdf->download('libro_diario_' . $fecha . '.pdf');
    }

}
