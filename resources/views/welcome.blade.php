<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajengan Rare - Eksplorasi MPASI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Fredoka', sans-serif;
        }

        /* Animasi melayang lembut lambat khas dunia anak-anak */
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(3deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        .element-melayang {
            animation: float 7s ease-in-out infinite;
        }
        html {
            scroll-behavior: smooth;
        }

        /* Gaya Dasar Efek Scroll Animasi */
        .reveal-element {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.25, 1, 0.5, 1), transform 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .reveal-element.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Efek Transisi Pop-up Pegas Kustom (Spring Physics) */
        .spring-pop {
            transition: transform 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275), filter 0.6s ease, drop-shadow 0.6s ease;
        }
    </style>
</head>
<body class="bg-gradient-to-b from-green-50 via-green-100 to-green-200/80 min-h-screen overflow-x-hidden relative">
<!-- NAVBAR -->
    <div class="w-full bg-white shadow-sm relative z-50">
        <header class="w-full px-4 md:px-12 py-4 flex items-center justify-between relative max-w-[1440px] mx-auto">
            
            <!-- Sisi Kiri: Biarkan kosong untuk menyeimbangkan logo -->
            <div class="flex-1 md:block hidden"></div>

            <!-- Logo Tengah (TETAP) -->
            <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                <a href="/" class="block h-28 md:h-36 transition-transform hover:scale-105">
                    <img src="{{ asset('image/logo3.png') }}" 
                         alt="Logo Ajengan Rare" 
                         class="h-full w-auto object-contain filter drop-shadow-[0_6px_10px_rgba(0,0,0,0.12)]">
                </a>
            </div>
            
            <!-- Sisi Kanan: Kita ganti <nav> dengan div kosong yang punya flex-1 -->
            <!-- Ini penting agar logo tetap berada di tengah layar -->
            <div class="flex-1 md:block hidden"></div>

            <!-- Tombol Mobile Menu (TETAP) -->
            <div class="md:hidden flex items-center ml-auto">
                <button onclick="toggleMobileMenu()" class="text-[#166534] focus:outline-none relative z-50">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path id="menu-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </header>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="hidden fixed inset-0 bg-white/95 flex flex-col items-center justify-center space-y-8 text-xl font-bold text-[#166534] z-40">
        <a href="/" onclick="toggleMobileMenu()" class="hover:text-orange-500 transition">Home</a>
        <a href="/resep" onclick="toggleMobileMenu()" class="hover:text-orange-500 transition">Resep</a>
        <a href="/kalkulator-gizi" onclick="toggleMobileMenu()" class="hover:text-orange-500 transition">Kalkulator Gizi</a>
    </div>

    <!-- SECTION 1: HERO BANNER -->
    <section id="hero" class="w-full z-10 relative -mt-1 bg-transparent">
        <img src="{{ asset('image/latar.png') }}" alt="Ajengan Rare Banner Utama" class="hidden md:block w-full h-auto select-none pointer-events-none">
        <img src="{{ asset('image/latar.png') }}" alt="Ajengan Rare Banner Utama Mobile" class="block md:hidden w-full h-auto select-none pointer-events-none">
    </section>

    <!-- SECTION 2: MENU PRODUK (REVISI: HANYA ZOOM MAJU, TIDAK ADA PERGESERAN VERTIKAL) -->
<section id="section-dua" class="w-full relative z-10 bg-transparent flex flex-col items-center justify-center overflow-hidden py-12">
    
    <div class="w-full max-w-[1350px] mx-auto relative flex items-center justify-center px-4 md:px-8">
        
        <!-- GIF Latar Belakang -->
        <img src="{{ asset('image/13.gif') }}" alt="Animasi Latar Belakang" 
             class="w-full h-auto object-contain pointer-events-none select-none z-10">

        <!-- Grid Konten -->
        <div class="absolute inset-0 flex items-center justify-center z-20 px-4 md:px-16 pt-4 md:pt-8">
            <div class="grid grid-cols-3 gap-x-2 sm:gap-x-4 md:gap-x-6 w-full max-w-[850px] items-center justify-center">
                
               <a href="{{ url('/produk/soto-kids') }}" class="flex flex-col items-center text-center group block select-none pt-10">
    <div class="flex justify-center items-center w-full h-40 md:h-60">
        <img src="{{ asset('image/soto.png') }}" alt="Soto" 
             class="w-24 sm:w-40 md:w-56 h-auto object-contain transition-all duration-500 ease-out group-hover:scale-125 group-hover:drop-shadow-[0_20px_30px_rgba(0,0,0,0.5)]">
    </div>
    <h3 class="text-xs sm:text-sm md:text-xl font-black text-emerald-700 mt-2 tracking-wide">Soto</h3>
    <div class="opacity-0 max-h-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:max-h-20 w-full max-w-[200px]">
        <p class="text-[10px] sm:text-xs md:text-sm font-bold text-amber-950/90 leading-relaxed mt-1">
            Perpaduan ayam kampung dan labu siam dalam bumbu kuning kaya antioksidan.
        </p>
    </div>
</a>

<a href="{{ url('/produk/sele-bun') }}" class="flex flex-col items-center text-center group block select-none pt-10">
    <div class="flex justify-center items-center w-full h-40 md:h-60">
        <img src="{{ asset('image/sele bun.png') }}" alt="Sele Bun" 
             class="w-24 sm:w-40 md:w-56 h-auto object-contain transition-all duration-500 ease-out group-hover:scale-125 group-hover:drop-shadow-[0_20px_30px_rgba(0,0,0,0.5)]">
    </div>
    <h3 class="text-xs sm:text-sm md:text-xl font-black text-[#5c3a21] mt-2 tracking-wide">Sele Bun</h3>
    <div class="opacity-0 max-h-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:max-h-20 w-full max-w-[200px]">
        <p class="text-[10px] sm:text-xs md:text-sm font-bold text-amber-950/90 leading-relaxed mt-1">
            Perpaduan ubi ungu, pisang susu, dan pepaya kaya serat dan vitamin alami.
        </p>
    </div>
</a>

<a href="{{ url('/produk/ledok-ledok') }}" class="flex flex-col items-center text-center group block select-none pt-10">
    <div class="flex justify-center items-center w-full h-40 md:h-60">
        <img src="{{ asset('image/ledok.png') }}" alt="Ledok-Ledok" 
             class="w-24 sm:w-40 md:w-56 h-auto object-contain transition-all duration-500 ease-out group-hover:scale-125 group-hover:drop-shadow-[0_20px_30px_rgba(0,0,0,0.5)]">
    </div>
    <h3 class="text-xs sm:text-sm md:text-xl font-black text-purple-700 mt-2 tracking-wide">Ledok-Ledok</h3>
    <div class="opacity-0 max-h-0 overflow-hidden transition-all duration-500 ease-in-out group-hover:opacity-100 group-hover:max-h-20 w-full max-w-[200px]">
        <p class="text-[10px] sm:text-xs md:text-sm font-bold text-amber-950/90 leading-relaxed mt-1">
            Kombinasi sorgum, waluh, bayam, dan telur ayam kampung kaya Vitamin A dan protein.
        </p>
    </div>
</a>

            </div>
        </div>
    </div>
</section>
  <!-- SECTION 3: TENTANG KAMI (GIF BACKGROUND) -->
<section id="tentang-kami" class="w-full relative py-24 md:py-32 flex items-center justify-center min-h-[600px] md:min-h-[700px] overflow-hidden">
    
    <!-- GIF Background (ditempatkan sebagai elemen paling belakang) -->
    <!-- object-cover memastikan GIF memenuhi area tanpa distorsi -->
    <img src="{{ asset('image/21.gif') }}" 
         alt="Animasi Background" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

    <!-- Konten Utama (z-20 agar berada di atas GIF) -->
    <div class="w-full max-w-[1100px] mx-auto px-6 relative z-20">
        <div class="flex flex-col md:flex-row items-center gap-10 md:gap-16 text-left w-full">
            
            <!-- Foto Kiri -->
            <div class="w-64 h-64 md:w-80 md:h-80 flex-shrink-0 flex items-center justify-center transition-transform duration-500 hover:scale-105">
                <img src="{{ asset('image/logo3.png') }}" alt="Ajengan Rare Premium" class="w-full h-full object-contain filter drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
            </div>
            
            <!-- Deskripsi Konten (Tanpa Bingkai) -->
            <!-- Kita tambahkan text-shadow yang kuat agar teks tetap terbaca tanpa perlu overlay warna -->
            <div class="flex-1">
                <h2 class="text-4xl md:text-5xl font-black text-orange-600 mb-6 [text-shadow:_0_2px_4px_rgb(0_0_0_/_30%)]">
                    Kenali Ajengan Rare
                </h2>
                <p class="text-lg md:text-xl font-medium text-amber-950 leading-relaxed max-w-[750px] [text-shadow:_0_1px_2px_rgb(255_255_255_/_80%)]">
                    Ajengan Rare merupakan inovasi MPASI *ready-to-sip* berbahan dasar Jagung Gembal (Sorgum) sebagai solusi praktis pencegahan stunting dan pemberdayaan pangan lokal Buleleng. Kaya serat, protein, vitamin, and mineral, Ajengan Rare hadir sebagai MPASI tinggi gizi, bebas gluten, tanpa pengawet, serta mudah dikonsumsi untuk mendukung tumbuh kembang anak secara optimal.
                </p>
                
                <div class="mt-8 flex flex-wrap gap-4 font-bold">
                    <div class="mt-8 flex flex-wrap gap-4 font-bold">
             <!-- Ubah href ke halaman detail yang sesuai -->
                 <a href="tentang-ajengan-rare.html" class="px-8 py-3.5 bg-orange-600 hover:bg-orange-700 text-white uppercase tracking-wider rounded-full shadow-lg shadow-orange-600/30 transition transform hover:-translate-y-0.5 text-sm md:text-base">
                 Jelajahi
                 </a>
                    
                </div>
            </div>

        </div>
    </div>
</section>
   <!-- SECTION 4: PROSES PRODUKSI / KEUNGGULAN (GIF BACKGROUND) -->
<section id="proses-produksi" class="w-full relative py-24 md:py-32 flex items-center justify-center overflow-hidden">
    
    <!-- GIF Background -->
    <!-- Pointer-events-none memastikan GIF tidak menghalangi klik pada konten -->
    <img src="{{ asset('image/23.gif') }}" 
         alt="Animasi Background" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

    <!-- Konten Utama -->
    <div class="w-full max-w-[1100px] mx-auto px-6 relative z-20">
        <div class="flex flex-col md:flex-row-reverse items-center gap-10 md:gap-16 text-left w-full">
            
            <!-- Ilustrasi/Foto Kanan -->
            
            
            <!-- Deskripsi Konten Kiri -->
            <!-- Kita tambahkan text-shadow agar teks tetap terbaca di atas GIF -->
            <div class="flex-1 reveal-element">
                <h2 class="text-4xl md:text-5xl font-black text-emerald-700 mb-6 [text-shadow:_0_2px_4px_rgb(255_255_255_/_80%)]">
                    Ajengan Rare Hadir dengan 
                    Kualitas Terbaik untuk Si Kecil
                </h2>
                <p class="text-lg md:text-xl font-medium text-amber-950 leading-relaxed max-w-[750px] mb-6 [text-shadow:_0_1px_2px_rgb(255_255_255_/_80%)]">
                    Ajengan Rare dibuat dari sorgum berkualitas asal Desa Panji, Buleleng yang dipadukan dengan sayuran dan protein hewani segar. Setiap bahan dipilih, dicuci, dan diolah secara higienis untuk memastikan kualitas serta keamanan pangan bagi Si Kecil.
                <p class="text-lg md:text-xl font-medium text-amber-950 leading-relaxed max-w-[750px] [text-shadow:_0_1px_2px_rgb(255_255_255_/_80%)]">
                    Proses pengolahan dilakukan tanpa pengawet dan penyedap buatan untuk menjaga kandungan gizi tetap optimal. Setelah itu, produk dikemas dalam kemasan food grade yang aman dan melalui kontrol kualitas sebelum didistribusikan kepada konsumen.
                </p>
                
                <div class="mt-8 flex flex-wrap gap-4 font-bold">
                    <a href="/resep" class="px-8 py-3.5 bg-emerald-700 hover:bg-emerald-800 text-white uppercase tracking-wider rounded-full shadow-lg shadow-emerald-700/30 transition transform hover:-translate-y-0.5 text-sm md:text-base">
                        Lihat Kreasi Resep
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- SECTION 5: KEUNGGULAN (DESAIN MENYATU TANPA BINGKAI) -->
<section id="keunggulan" class="w-full relative py-16 flex items-center justify-center overflow-hidden">
    
    <!-- GIF Background -->
    <img src="{{ asset('image/27.gif') }}" 
         alt="Animasi Background" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

    <!-- Konten Utama -->
    <div class="w-full max-w-[1000px] mx-auto px-6 relative z-20 reveal-element transition-all duration-1000 ease-out opacity-0 translate-y-10">
        
        <!-- Judul & Subjudul -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-black text-orange-600 mb-4 [text-shadow:_0_2px_4px_rgb(255_255_255_/_80%)]">
                Pilihan Tepat untuk Si Kecil
            </h2>
            <p class="text-amber-950 font-medium text-lg">
                keunggulan produk ajengan rare
            </p>
        </div>

        <!-- Grid 4 Kolom -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            
            <!-- Item 1 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/unggul1.png') }}" alt="Keunggulan 1" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-bold text-amber-950 text-center px-2">
                    Dikemas dalam spouted pouch steril yang aman, praktis, dan bebas pengawet sintetis
                </p>
            </div>

            <!-- Item 2 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/unggul2.png') }}" alt="Keunggulan 2" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-bold text-amber-950 text-center px-2">
                    MPASI berkualitas sesuai standar Kemenkes
                </p>
            </div>

            <!-- Item 3 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/9.png') }}" alt="Keunggulan 3" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-bold text-amber-950 text-center px-2">
                   Mendukung SDG 2 (Zero Hunger) dan SDG 3 (Good Health and Well-being).
                </p>
            </div>

            <!-- Item 4 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/10.png') }}" alt="Keunggulan 4" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-bold text-amber-950 text-center px-2">
                    Meningkatkan nilai jual sorgum hingga 30% bagi petani lokal.
                </p>
            </div>

        </div>
    </div>
</section>
<!-- SECTION 6: TEMUKAN KAMI -->
<section id="temukan-kami" class="w-full relative py-32 md:py-48 flex flex-col items-center justify-center overflow-hidden">
    
    <!-- Background -->
    <img src="{{ asset('image/30.png') }}" 
         alt="Background Temukan Kami" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

    <!-- Konten Utama -->
    <div class="w-full max-w-[1100px] mx-auto px-6 relative z-20 reveal-element">
        
        <div class="text-center mb-24">
            <h2 class="text-5xl md:text-7xl font-black text-[#5c3a21] mb-6 [text-shadow:_0_4px_8px_rgb(255_255_255_/_80%)]">
                Temukan Kami
            </h2>
            <p class="text-emerald-900 font-bold text-xl md:text-2xl">
                Mari terhubung dan tumbuh bersama kami
            </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-12 md:gap-20">
    
            <!-- WhatsApp -->
            <a href="https://wa.me/nomor-anda-disini" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-24 h-24 md:w-36 md:h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/whatsapp.png') }}" alt="WhatsApp" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">WhatsApp</span>
            </a>

            <!-- Instagram -->
            <a href="https://instagram.com/username-anda" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-24 h-24 md:w-36 md:h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/instagram.png') }}" alt="Instagram" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">Instagram</span>
            </a>

            <!-- TikTok -->
            <a href="https://tiktok.com/@username-anda" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-24 h-24 md:w-36 md:h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/tiktok.png') }}" alt="TikTok" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">TikTok</span>
            </a>

            <!-- Komunitas -->
            <a href="link-komunitas-anda" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-24 h-24 md:w-36 md:h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/komunitas.png') }}" alt="Komunitas" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">Komunitas</span>
            </a>

        </div>
    </div>
</section>

    <!-- SCRIPT UTAMA -->
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }

        // Script Efek Scroll Otomatis Berbasis Intersection Observer
        document.addEventListener("DOMContentLoaded", function() {
            const elementsToReveal = document.querySelectorAll('.reveal-element');
            
            const options = {
                root: null, 
                threshold: 0.15, 
                rootMargin: "0px"
            };

            const observer = new IntersectionObserver(function(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target); 
                    }
                });
            }, options);

            elementsToReveal.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>