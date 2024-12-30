<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Energy Solution of Indonesia</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

    {{-- animasi --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-tFZD9LqV3hsDSO8pJ6CJoi3hBlzEgPJAeNDzBzvVxm4kccUftAAG5srG9fpbQoST" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">


    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .whatsapp-sticky {
            position: fixed;
            bottom: 20px;
            /* Jarak dari bawah */
            right: 20px;
            /* Jarak dari kanan */
            z-index: 999;
        }

        .whatsapp-sticky a {
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            padding: 13px;
            font-size: 24px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .whatsapp-sticky a:hover {
            background-color: #128C7E;
            transform: scale(1.1);
        }

        /* Bagian animasi loading */
        #loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            z-index: 9999;
        }

        /* Konten utama disembunyikan selama loading */
        #main-content {
            display: none;
        }

        /* Menggeser dropdown ke arah kiri */
        .dropdown-menu-right-adjust {
            right: auto;
            left: -100px;
            /* Atur sesuai kebutuhan */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('guest.layouts.navbar')
    <!-- End of Navbar -->

    @yield('content')

    <!-- Footer -->
    @include('guest.layouts.footer')
    <!-- End of Footer -->

    @stack('scripts')

    <!-- WhatsApp Sticky Button -->
    <div class="whatsapp-sticky">
        <a href="{{ route('wa') }}" target="_blank">
            <i class="bi bi-whatsapp"></i>
        </a>
    </div>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>
</body>
