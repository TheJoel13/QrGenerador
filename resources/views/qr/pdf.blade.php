<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free QR Code Generator Online | Create Custom QR Codes Fast</title>
    <meta name="description"
        content="Create custom QR codes for any link, text, or file. Our tool is 100% free and easy to use, with no registration required.">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
        }

        .qr-container {
            margin: 20px auto;
            display: flex;
            justify-content: center;
        }

        .qr-info {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7412523202147499"
        crossorigin="anonymous"></script>
</head>

<body>

    <div class="qr-container">
        <img src="data:image/png;base64,{{ $qrBase64 }}" alt="QR Code" width="300" height="300">
    </div>

    <div class="qr-info mt-5">
        <p><strong>Enlace:</strong> {{ $link }}</p>
    </div>
</body>

</html>
