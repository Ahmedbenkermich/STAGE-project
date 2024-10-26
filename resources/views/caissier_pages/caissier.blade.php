<x-layout-ca>
    @vite('resources/css/app.css')



    <div class="bg-full p-6">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <form method="GET" action="{{ route('caissier.dashboard') }}" class="mb-6 bg-white p-6 rounded-lg shadow-md">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-4 md:space-y-0 md:space-x-4">
                <input type="text" name="num" placeholder="Numéro" value="{{ request('num') }}" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="text" name="montant" placeholder="Montant" value="{{ request('montant') }}" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <input type="text" name="benefication" placeholder="Benefication" value="{{ request('benefication') }}" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <input type="text" name="type_cheque" placeholder="Type de Chèque" value="{{ request('type_cheque') }}" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">

                <select name="emission" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Emission --</option>
                    <option value="emis" {{ request('emission') == 'emis' ? 'selected' : '' }}>Emis</option>
                    <option value="non_emis" {{ request('emission') == 'non_emis' ? 'selected' : '' }}>Non Emis</option>
                </select>
                <input type="date" name="date" value="{{ request('date') }}" class="p-2 border border-gray-300 rounded w-full md:w-1/6 focus:outline-none focus:ring-2 focus:ring-blue-500">

            </div>

            <div class="flex justify-center mt-4">
                <button type="submit" class="px-6 py-2 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">Rechercher</button>
                <a href="{{ route('caissier.dashboard') }}" class="ml-4 px-6 py-2 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 transition duration-200">Reset</a>
                <a href="{{ route('caissier.generatePdf', request()->query()) }}" class="ml-4 px-6 py-2 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-200">Export PDF</a>
            </div>
        </form>

        <div class="overflow-x-auto bg-white p-4 rounded-lg shadow-md">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-100">
                <tr>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Numéro</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Montant</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Benefication</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Type De Chèque</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium">Emis/NonEmis</th>
                    <th class="py-3 px-4 border-b border-gray-200 text-left text-gray-700 font-medium"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($cheques as $cheque)
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="py-3 px-4 border-b border-gray-200">{{ $cheque['num'] }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $cheque['montant'] }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $cheque['benefication'] }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $cheque['type_cheque'] }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">{{ $cheque['emission'] }}</td>
                        <td class="py-3 px-4 border-b border-gray-200">
                            <a href="/caissier/{{$cheque->id}}/emis" class="text-blue-600 hover:text-blue-800">Editer</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout-ca>
