<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Kasir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #121212;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #1f1f1f;
        }
        .nav-link, .navbar-brand {
            color: #fff !important;
        }
        .nav-link:hover {
            color: #ff9f43 !important;
        }
        .card {
            background-color: #1e1e1e;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.05);
        }
        .btn-custom {
            background-color: #ff9f43;
            border: none;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #ffa94d;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand fw-bold text-warning" href="#">Kasir</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon text-light"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ url('/kasir') }}" class="nav-link">Kasir</a></li>
                <li class="nav-item"><a href="{{ url('/pembayaran') }}" class="nav-link">Pembayaran</a></li>
            </ul>
        </div>
    </nav>

    <div class="container py-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
