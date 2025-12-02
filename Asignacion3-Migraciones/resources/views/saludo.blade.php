<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }
        .container {
            text-align: center;
            background: white;
            padding: 60px 80px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }
        h1 {
            color: #333;
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .nombre {
            color: #11998e;
            font-weight: bold;
        }
        .emoji {
            font-size: 4rem;
            margin-bottom: 20px;
        }
        p {
            color: #666;
            font-size: 1rem;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="emoji">👋</div>
        <h1>Hola, <span class="nombre">{{ $nombre }}</span></h1>
        <p>Este es un saludo personalizado generado dinámicamente.</p>
    </div>
</body>
</html>
