<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Pembayaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0d0d0d;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #1a1a1a;
        }
        .nav-link, .navbar-brand {
            color: #fff !important;
        }
        .nav-link:hover {
            color: #ffb84d !important;
        }
        .card {
            background-color: #1c1c1c;
            border: none;
            border-radius: 14px;
            box-shadow: 0 6px 10px rgba(255, 255, 255, 0.05);
        }
        .btn-pay {
            background-color: #ff9f43;
            border: none;
            color: #121212;
            font-weight: 600;
        }
        .btn-pay:hover {
            background-color: #ffa94d;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg px-4">
        <a class="navbar-brand fw-bold text-warning" href="#">Pembayaran</a>
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
