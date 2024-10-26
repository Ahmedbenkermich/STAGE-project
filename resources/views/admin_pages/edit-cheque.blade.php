<x-layout>
    @vite('resources/css/app.css')

    <style>
        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        .card {
            margin: 0 auto;
        }

        .card-header {
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .card-header h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }

        .card-header p {
            margin: 5px 0 0;
            color: #777;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #3b82f6;
            outline: none;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #3b82f6;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #2563eb;
        }

        .btn-red {
            background-color: #ef4444;
        }

        .btn-red:hover {
            background-color: #dc2626;
        }

        /*--------------------------*/

      label {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 8px;
            display: block;
        }

        select {
            width: 100%;
            max-width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-top: 5px;
            margin-bottom: 15px;
        }

        select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .form-error {
            color: #e74c3c;
            font-size: 14px;
            margin-top: 5px;
        }

    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Modifier cheque numéro: {{$cheque->num}}</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/show/{{$cheque->id}}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <x-form-field>
                            <x-form-label for="num">Num de cheque</x-form-label>
                            <x-form-input name="num" id="num" placeholder="donner le numero" value="{{$cheque->num}}" required class="form-control" />
                            <x-form-error name="num" />
                        </x-form-field>
                    </div>
                    <x-form-field>
                        <x-form-label for="montant">Montant</x-form-label>
                        <x-form-input name="montant" id="montant" placeholder="donner le montant" value="{{$cheque->montant}}" required class="form-control" />
                        <x-form-error name="montant" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="benefication"> Benefication</x-form-label>
                        <x-form-input name="benefication" id="benefication" placeholder="benefication" required value="{{$cheque->benefication}}" class="form-control" />
                        <x-form-error name="benefication" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="motif"> motif</x-form-label>
                        <x-form-input name="motif" id="motif" placeholder="motif" required value="{{$cheque->motif}}" class="form-control" />
                        <x-form-error name="motif" />
                    </x-form-field>
                  
            <label for="type_cheque">Type de cheque:</label>
            <select name="type_cheque" id="type_cheque"  >
            
              <option value="f">Fornisseur</option>
              <option value="s" >Stagiaire</option>
              <option value="p"selected >personnel</option>
            </select>
            <x-form-error name="type_cheque" />
            
            
            <br><br>

                    <div class="mt-6 flex justify-between items-center">
                        <button form="delete-form" class="btn btn-red text-sm font-bold">Supprimer</button>

                        <div class="flex items-center space-x-8">
                            <a href="/show" class="text-sm font-semibold text-blue-400">Annuler</a>
                            <button type="submit" class="btn">Confirmer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form method="POST" action="/show/{{$cheque->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
