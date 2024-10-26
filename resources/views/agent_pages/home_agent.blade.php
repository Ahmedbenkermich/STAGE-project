<x-layout-ag>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }
    
        .stat-card {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1 1 calc(24% - 20px);
            box-sizing: border-box;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
    
        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
        }
    
        .stat-content h3 {
            font-size: 16px;
            color: #333;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    
        .stat-number {
            font-size: 28px;
            font-weight: 600;
            color: #007bff;
            margin-top: 5px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    
        .stat-icon {
            font-size: 36px;
            color: #000000; 
            margin-bottom: 15px;
        }
    </style>
    
    <div class="container">
        <div class="stat-card">
            <div class="stat-icon">👤</div>
            <div class="stat-content">
                <h3>Nombre d'Agents :</h3>
                <p class="stat-number">{{ $agent }}</p>
            </div>
        </div>
    
        <div class="stat-card">
            <div class="stat-icon">💼</div>
            <div class="stat-content">
                <h3>Nombre des Caissiers :</h3>
                <p class="stat-number">{{ $caissier }}</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="stat-card">
            <div class="stat-icon">💵</div>
            <div class="stat-content">
                <h3>Nombre des Cheques emis :</h3>
                <p class="stat-number">{{ $emis }}</p>
            </div>
        </div>
    
        <div class="stat-card">
            <div class="stat-icon">🚫</div>
            <div class="stat-content">
                <h3>Nombre des Cheques Non emis :</h3>
                <p class="stat-number">{{ $non_emis }}</p>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="stat-card">
            <div class="stat-icon">🏦</div>
            <div class="stat-content">
                <h3>Nombre des Banques :</h3>
                <p class="stat-number">{{ $banque }}</p>
            </div>
        </div>
    </div>
        
</x-layout-ag>
