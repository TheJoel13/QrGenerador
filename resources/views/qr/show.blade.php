<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Incluye tu archivo CSS responsive -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>QR Generated</title>
</head>

<body class="qr-body" data-bs-theme="light">
    <div class="container text-center">
        <h2 class="qr-title">Here's your QR Code!</h2>

        <div class="qr-container">
            {!! $qr !!}
        </div>

        <div class="mt-4 btn-group-mobile">
            <form action="{{ route('qr.descargaPng') }}" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="link" value="{{ request('link') }}">
                <button type="submit" class="btn btn-primary">Download as PNG</button>
            </form>

            <form action="{{ route('qr.descargaPdf') }}" method="POST" class="d-inline">
                @csrf
                <input type="hidden" name="link" value="{{ request('link') }}">
                <button type="submit" class="btn btn-danger">Download as PDF</button>
            </form>

            <form action="{{ route('qr.index') }}" method="GET" class="d-inline">
                @csrf
                <input type="hidden" value="{{ request('index') }}">
                <button type="submit" class="btn btn-secondary">Generate Another QR</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>