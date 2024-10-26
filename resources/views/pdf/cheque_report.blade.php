<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheque Report</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1>Cheque Report</h1>
    <table>
        <thead>
        <tr>
            <th>Numéro</th>
            <th>Montant</th>
            <th>Benefication</th>
            <th>Type de Chèque</th>
            <th>Emis/NonEmis</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cheques as $cheque)
            <tr>
                <td>{{ $cheque->num }}</td>
                <td>{{ $cheque->montant }}</td>
                <td>{{ $cheque->benefication }}</td>
                <td>{{ $cheque->type_cheque }}</td>
                <td>{{ $cheque->emission }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
