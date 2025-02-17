<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Generado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .qr-container {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <h1>QR Generado</h1>
    <div class="qr-container">
        <img src="data:image/png;base64, {!! base64_encode(file_get_contents(public_path('qr_images/qr_temp.png'))) !!} " alt="QR Code" />
    </div>
</body>

</html>
