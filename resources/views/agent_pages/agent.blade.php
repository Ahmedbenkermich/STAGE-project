<x-layout-ag>
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

        /* Styles for date inputs */
        input[type="datetime-local"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background-color: #f9f9f9;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="datetime-local"]:focus {
            border-color: #3b82f6;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Les informations des chéques</h2>
                <p>Mettez à jour votre chèque :</p>
            </div>
            <div class="card-body">
                <form method="POST" action="/agent">
                    @csrf

                    <div class="form-group">
                        <x-form-field>
                            <x-form-label for="num">Num de cheque</x-form-label>
                            <x-form-input name="num" id="num" placeholder="donner le numero" :value="old('num')"
                                required class="form-control" />
                            <x-form-error name="num" />
                        </x-form-field>
                    </div>
                    <x-form-field>
                        <x-form-label for="montant">Montant</x-form-label>
                        <x-form-input name="montant" id="montant" placeholder="donner le montant" :value="old('montant')"
                            required class="form-control" />
                        <x-form-error name="montant" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="benefication">Benefication</x-form-label>
                        <x-form-input name="benefication" id="benefication" placeholder="benefication" required
                            :value="old('benefication')" class="form-control" />
                        <x-form-error name="benefication" />
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="motif">Motif</x-form-label>
                        <x-form-input name="motif" id="motif" placeholder="motif" required :value="old('motif')"
                            class="form-control" />
                        <x-form-error name="motif" />
                    </x-form-field>




                    <div class="form-group">
                        <label for="date_entree_caisse">Date Entree Caisse:</label>
                        <input type="datetime-local" id="date_entree_caisse" name="date_entree_caisse"  class="form-control">
                        <x-form-error name="date_entree_caisse" />
                    </div>

                    <div class="form-group">
                        <label for="date_valeur">Date Valeur:</label>
                        <input type="datetime-local" id="date_valeur" name="date_valeur"   class="form-control">
                        <x-form-error name="date_valeur" />
                    </div>



                    
                    <div class="form-group">
                        <label for="type_cheque">Type de cheque:</label>
                        <select name="type_cheque" id="type_cheque" class="form-control">
                            <option value="f">Fornisseur</option>
                            <option value="s">Stagiaire</option>
                            <option value="p" selected>Personnel</option>
                        </select>
                        <x-form-error name="type_cheque" />
                    </div>

                    <div class="form-label-group">
                        <label for="code_banque">Banque:</label>
                        <select name="code_banque" id="code_banque" onchange="showDiv('div', this)" class="form-control">
                            <option value="">Sélectionner une banque</option>
                            <option value="1">STB</option>
                            <option value="2">BH</option>
                            <option value="3">BNA</option>
                            <option value="4">BFPME</option>
                            <option value="5">BTS</option>
                            <option value="6">BTE</option>
                            <option value="7">BTL</option>
                            <option value="8">TSB</option>
                            <option value="9">ZITOUNA</option>
                            <option value="10">AL BARAKA</option>
                            <option value="11">AL WIFAK</option>
                            <option value="12">AMEN</option>
                            <option value="13">ATTIJARI</option>
                            <option value="14">ATB</option>
                            <option value="15">ABC</option>
                            <option value="16">BIAT</option>
                            <option value="17">BT</option>
                            <option value="18">BTK</option>
                            <option value="19">BFT</option>
                            <option value="20">QNB</option>
                            <option value="21">UBCI</option>
                            <option value="22">UIB</option>
                            <option value="23">CITI</option>
                        </select>
                        <div id="div2" style="display:none;">
                            <label for="compte_id">Identifiant :</label>
                            <x-form-input name="compte_id" id="compte_id" placeholder="donner le compte" required
                                :value="old('compte_id')" class="form-control" />
                            <x-form-error name="compte_id" />


                            <label for="compte_password">Mot de passe :</label>
                            <x-form-input name="compte_password" id="compte_password" type="password" placeholder="donner le mot de passe" required
                                :value="old('compte_password')" class="form-control" />
                            <x-form-error name="compte_password" />

                        </div>
                    </div>

                    <script>
                        function showDiv(prefix, chooser) {
                            var selectedOption = (chooser.options[chooser.selectedIndex].value);
                            var div = document.getElementById(prefix + "2");
                            div.style.display = selectedOption ? 'block' : 'none';
                        }
                    </script>

                    <br><br>
                    <button type="submit" class="btn">Enregistrer</button>

                </form>
            </div>
        </div>
    </div>
</x-layout-ag>
