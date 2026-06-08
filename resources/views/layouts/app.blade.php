<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajengan Rare</title>
    <script src="https://cdn.tailwindcss.com"></script>
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