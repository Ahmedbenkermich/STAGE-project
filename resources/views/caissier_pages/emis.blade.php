<x-layout-ca>
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
                    <h2>Emission de cheque numéro : {{$cheque->num}} </h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="/caissier/{{$cheque->id}}">
                        @csrf
                        @method('PATCH')
  
                      
                <label for="emission">Cheque:</label>
                <select name="emission" id="emission"  >
                
                  <option value="emis" >Emis</option>
                  <option value="non_emis" selected >Non Emis</option>
                </select>
                <x-form-error name="emission" />

                <label for="date_emission">Date Emission:</label>
                <input  type="datetime-local" id="date_emission" name="date_emission">
                <x-form-error name="date_emission" />



                <br><br>
    
                        <div class="mt-6 flex justify-between items-center">
                            
                            <div class="flex items-center space-x-8">
                                <a href="/caissier" class="text-sm font-semibold text-blue-400">Annuler</a>
                                <button type="submit" class="btn">Confirmer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
   
    
</x-layout-ca>