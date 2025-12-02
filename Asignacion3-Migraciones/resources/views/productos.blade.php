<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 40px 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            color: white;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }
        .productos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        .producto-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .producto-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
        }
        .producto-nombre {
            color: #333;
            font-size: 1.4rem;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .producto-descripcion {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .producto-precio {
            color: #667eea;
            font-size: 1.8rem;
            font-weight: bold;
        }
        .producto-precio::before {
            content: '$';
        }
        .producto-id {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-bottom: 15px;
        }
        .empty-message {
            text-align: center;
            color: white;
            font-size: 1.2rem;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
        }
        .stats {
            text-align: center;
            color: white;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🛍️ Lista de Productos</h1>
        
        <div class="stats">
            Total de productos: <strong>{{ count($productos) }}</strong>
        </div>

        @if(count($productos) > 0)
            <div class="productos-grid">
                @foreach($productos as $producto)
                    <div class="producto-card">
                        <span class="producto-id">ID: {{ $producto->id }}</span>
                        <h2 class="producto-nombre">{{ $producto->nombre }}</h2>
                        <p class="producto-descripcion">{{ $producto->descripcion }}</p>
                        <p class="producto-precio">{{ number_format($producto->precio, 2) }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-message">
                No hay productos disponibles en este momento.
            </div>
        @endif
    </div>
</body>
</html>
