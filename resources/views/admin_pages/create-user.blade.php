<x-layout>
    <style>
        .container {
            width: 100%;
            max-width: 600px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
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

        /*---------------------------------------------------*/

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

    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Création Utilisateur : </h2>
            </div>
            <div class="card-body">
                <form method="POST" action="/create-user">
                    @csrf
                    <div class="form-group">
                        <x-form-field>
                            <x-form-label for="name">Nom</x-form-label>
                            <x-form-input name="name" id="name" placeholder="donner le Nom" :value="old('name')"
                                required class="form-control" />
                            <x-form-error name="name" />
                        </x-form-field>


                        <x-form-field>
                            <x-form-label for="username">Nom d'utilisateur
                            </x-form-label>
                            <x-form-input name="username" id="username" placeholder="donner le nom d'utilisateur
"
                                :value="old('username')" required class="form-control" />
                            <x-form-error name="username" />
                        </x-form-field>
                    </div>
                    <x-form-field>
                        <x-form-label for="email">E-mail</x-form-label>
                        <x-form-input name="email" id="email" placeholder="donner l'E-mail" :value="old('email')"
                            required class="form-control" />
                        <x-form-error name="email" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password"> Mot de passe </x-form-label>
                        <x-form-input name="password" id="password" type="password"
                            placeholder="donner le mot de passe" required :value="old('password')" class="form-control" />
                        <x-form-error name="password" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="password_confirmation"> Confirmation mot de passe</x-form-label>
                        <x-form-input name="password_confirmation" type="password" id="password_confirmation"
                            placeholder="Confirmer le mot de passe" required :value="old('password_confirmation')" class="form-control" />
                        <x-form-error name="password_confirmation" />
                    </x-form-field>
                

                    <label for="type_user">Role de l'Utilisateur:</label>
<select name="type_user" id="type_user"  >

  <option value="admin">Admin</option>
  <option value="agent" selected>Agent</option>
  <option value="caissier" >Caissier</option>
</select>
<x-form-error name="type_user" />


<br><br>
                    <button type="submit" class="btn">Enregistrer</button>
                </form>
            </div>

        </div>
    </div>
</x-layout>
