<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR Generado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <div class="container my-5">
        <h1 class="text-center">QR Generado</h1>
        <div class="d-flex justify-content-center">
            {!! $qr !!}
        </div>

        <div class="d-flex justify-content-center mt-4">
            <form action="{{ route('qr.descargaPdf') }}" method="POST">
                @csrf
                <input type="hidden" name="link" value="{{ request()->input('link') }}">
                <button type="submit" class="btn btn-primary">Descargar PDF</button>
            </form>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <form action="{{ route('qr.descargaPng') }}" method="POST">
                @csrf
                <input type="hidden" name="link" value="{{ request()->input('link') }}">
                <button type="submit" class="btn btn-primary">Descargar PNG</button>
            </form>
        </div>

        <div class="d-flex justify-content-center mt-2">
            <a href="{{ route('qr.index') }}" class="btn btn-secondary">Generar otro QR</a>
        </div>
    </div>
</body>

</html>
