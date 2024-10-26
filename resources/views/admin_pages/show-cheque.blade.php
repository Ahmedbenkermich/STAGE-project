<x-layout>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Table</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Numéro</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Montant</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Benefication</th>
                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600">Type De Cheque</th>

                    <th class="py-2 px-4 border-b border-gray-200 text-left text-gray-600"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($cheques as $cheque)
                    <tr>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $cheque['num'] }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $cheque['montant'] }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $cheque['benefication'] }}</td>
                        <td class="py-2 px-4 border-b border-gray-200">{{ $cheque['type_cheque'] }}</td>

                        <td class="py-2 px-4 border-b border-gray-200 text-blue-600"><a href="/show/{{$cheque->id}}/edit">Editer</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </body>
    </html>

</x-layout>
