<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura Básica PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
        }
        .ip-address {
            font-weight: bold;
            color: #0066cc;
        }
    </style>
</head>
<body>
    <h1>Bienvenido a mi página</h1>
    <p>Este es un ejemplo de una estructura básica con PHP en español.</p>
    <p>Tu dirección IP es: <span class="ip-address"><?php echo htmlspecialchars($_SERVER['REMOTE_ADDR']); ?></span></p>
</body>
</html>