<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg py-3 sticky-top border-bottom bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="/">
                <i class="bi bi-mask me-2 fs-3 text-primary"></i> Moony
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-2">
                    <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                    <li class="nav-item"><a href="/events/create" class="nav-link">Criar Eventos</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-outline-primary ms-lg-3">Entrar</a></li>
                </ul>
            </div>
        </div>
    </nav> 

    <main class="flex-grow-1">
        @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
        @endif
        @yield('content')
    </main>

    <footer class="border-top py-4 bg-body-tertiary">
        <div class="container d-flex justify-content-center">
            <p class="mb-0 text-muted">&copy; {{ date('Y') }} Moony.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>