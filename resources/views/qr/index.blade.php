<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generador de QR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Generador de Código QR</h1>
        <form action="{{ route('qr.show') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="link" class="form-label">Introduce la página para generar el QR</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="https://tupagina.com" required>
                @error('link')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Generar QR</button>
        </form>
    </div>
</body>
</html>
