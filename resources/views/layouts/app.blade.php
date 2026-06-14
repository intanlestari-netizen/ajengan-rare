<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajengan Rare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- REVISI: Script Alpine.js ditaruh di sini agar fitur pop-up/modal berjalan lancar -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        .bg-gif-container {
            background-image: url('{{ asset('image/background-produk.gif') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            min-height: 100vh;
            width: 100%;
        }
        /* Tambahan CSS opsional untuk mencegah kedipan modal saat halaman di-refresh */
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="m-0 p-0">
    <div class="bg-gif-container">
        <div class="min-h-screen bg-black/30 backdrop-blur-[2px] flex flex-col">
            <main class="flex-grow">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>