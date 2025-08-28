<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generador de QR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap-dark.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <div class="container my-5">
        <h1 class="text-center">Qr Generator for Free</h1>
        <form action="{{ route('qr.show') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="link" class="form-label">Insert the link to create the QR code</label>
                <input type="text" class="form-control" id="link" name="link"
                    placeholder="https://examplelink.com" required>
                @error('link')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Generate QR</button>
            </div>
            <p class="d-flex justify-content-center mt-3">By The13k</p>
        </form>
    </div>
</body>

</html>
