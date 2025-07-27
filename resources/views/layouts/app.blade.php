<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RafaRentCar - Rental Mobil Terpercaya')</title>
    <meta name="description" content="@yield('description', 'RafaRentCar menyediakan layanan rental mobil terpercaya dengan berbagai pilihan kendaraan berkualitas.')">

    <!-- Tailwind CSS - PASTIKAN INI LOAD PERTAMA -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom CSS - LOAD SETELAH TAILWIND -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Tambahkan ini agar CSS tambahan dari @push('styles') bisa muncul -->
    @stack('styles')

    <style>
        /* Reset untuk memastikan tidak ada conflict */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
        }

        /* Fix untuk overlapping text */
        .hero-text {
            position: relative;
            z-index: 10;
        }

        /* Pastikan gradient background */
        .hero-gradient {
            background: linear-gradient(135deg, #1e40af 0%, #7c3aed 100%);
        }
    </style>
</head>
<body class="font-inter bg-gray-50">
    <!-- Include Header -->
    @include('partials.header')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Include Footer -->
    @include('partials.footer')

    <!-- Custom JavaScript -->
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Tambahkan ini agar script tambahan dari @push('scripts') bisa muncul -->
    @stack('scripts')
</body>
</html>
