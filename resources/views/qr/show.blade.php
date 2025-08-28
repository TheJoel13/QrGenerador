<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{--     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <title>QR Generated</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7412523202147499"
        crossorigin="anonymous"></script>
    <title>Free QR Code Generator Online | Create Custom QR Codes Fast</title>
    <meta name="description"
        content="Create custom QR codes for any link, text, or file. Our tool is 100% free and easy to use, with no registration required.">
</head>
<style>
    @tailwind base;
    @tailwind components;
    @tailwind utilities;

    /* Estilos personalizados para móviles */
    .qr-body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 15px;
        background-color: #f8f9fa;
    }

    .qr-container {
        max-width: 300px;
        margin: 0 auto;
        padding: 15px;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .qr-container svg {
        width: 100% !important;
        height: auto !important;
    }

    .btn-group-mobile {
        display: flex;
        flex-direction: column;
        gap: 12px;
        width: 100%;
        max-width: 300px;
        margin: 0 auto;
    }

    .btn-group-mobile .btn {
        width: 100%;
        padding: 12px;
        font-weight: 500;
        border-radius: 8px;
    }

    .qr-title {
        font-size: 1.75rem;
        margin-bottom: 1.5rem !important;
        word-wrap: break-word;
        color: #333;
        font-weight: 600;
    }

    .btn:hover {
        transform: translateY(-2px);
        transition: all 0.2s ease;
    }

    .btn:active {
        transform: translateY(0);
    }

    /* Media queries para responsive design */
    @media (max-width: 576px) {
        .qr-body {
            padding: 10px;
            justify-content: flex-start;
            padding-top: 2rem;
        }

        .qr-title {
            font-size: 1.5rem;
        }

        .qr-container {
            max-width: 280px;
            padding: 12px;
        }
    }

    @media (min-width: 768px) {
        .btn-group-mobile {
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 100%;
        }

        .btn-group-mobile .btn {
            width: auto;
            min-width: 200px;
            margin: 0 5px;
        }

        .qr-title {
            font-size: 2rem;
        }
    }

    /* Mejoras de accesibilidad */
    .btn:focus {
        box-shadow: 0 0 0 3px rgba(38, 143, 255, 0.5);
    }

    /* Efecto de carga suave para la página */
    .container {
        animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

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
