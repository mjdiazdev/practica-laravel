<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Libro Diario</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #444; padding: 5px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Libro Diario</h2>
    <p>Fecha: {{ \Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

    <table>
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cuenta</th>
                <th>Descripción</th>
                <th>Debe</th>
                <th>Haber</th>
            </tr>
        </thead>
        <tbody>
            @php $contador = 1; @endphp
            @foreach($agrupados as $grupo)
                <tr>
                    <td>Fecha</td>
                    <td colspan="4" style="font-weight: bold; text-align: center;">-{{ $contador }}-</td>
                </tr>
                @foreach($grupo as $mov)
                    <tr>
                        <td>{{ $mov->created_at->format('Y-m-d') }}</td>
                        <td>{{ $mov->cuentaContable->codigo }} - {{ $mov->cuentaContable->nombre }}</td>
                        <td>{{ $mov->descripcion }}</td>
                        <td>
                            @if($mov->tipo === 'debe')
                                {{ number_format($mov->monto, 2) }}
                            @endif
                        </td>
                        <td>
                            @if($mov->tipo === 'haber')
                                {{ number_format($mov->monto, 2) }}
                            @endif
                        </td>
                    </tr>
                @endforeach
                @php $contador++; @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th colspan="3">Totales</th>
                <th>{{ number_format($totalDebe, 2) }}</th>
                <th>{{ number_format($totalHaber, 2) }}</th>
            </tr>
        </tfoot>
    </table>
</body>
</html>
