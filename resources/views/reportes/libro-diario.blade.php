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
            @foreach($movimientos as $mov)
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
        </tbody>
    </table>
</body>
</html>
