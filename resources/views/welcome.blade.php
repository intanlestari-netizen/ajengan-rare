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
    <!-- Tampilan Laptop (Akan otomatis tersembunyi di HP) -->
    <img src="{{ asset('image/latar.png') }}" alt="Ajengan Rare Banner Utama" 
         class="hidden md:block w-full h-auto select-none pointer-events-none">
    
    <!-- Tampilan HP (Akan otomatis tersembunyi di Laptop) -->
    <!-- Ganti 'latar-mobile.png' dengan nama file latar PNG khusus HP yang sudah kamu siapkan -->
    <img src="{{ asset('image/latar2.png') }}" alt="Ajengan Rare Banner Utama Mobile" 
         class="block md:hidden w-full h-auto object-cover select-none pointer-events-none">

<!-- ======================================================================================= -->
<!-- ======================================================================================= -->
<!-- TITLE: SECTION 2 - MENU PRODUK RESPONSIF (TANPA SEKAT - MENYATU TOTAL)                  -->
<!-- ======================================================================================= -->
<!-- KUNCI: Menghilangkan py-6 dan md:py-12 agar tidak ada celah/sekat putih antar-section  -->
<section id="section-dua" class="w-full relative z-10 bg-transparent flex flex-col items-center justify-center overflow-hidden my-0">
    
    <!-- =================================================================================== -->
    <!-- SUB-TITLE: 1. TAMPILAN LAPTOP (TIDAK ADA PERUBAHAN)                                 -->
    <!-- =================================================================================== -->
    <div class="hidden md:flex w-full max-w-[1350px] mx-auto relative items-center justify-center px-8 bg-transparent pt-10 pb-10">
        
        <!-- Animasi Latar Belakang Laptop -->
        <img src="{{ asset('image/background-menu-laptop.gif') }}" alt="Animasi Latar Belakang" 
             class="w-full h-auto object-contain pointer-events-none select-none z-0 opacity-80">

        <!-- Grid Konten Produk Atas Latar Belakang Laptop -->
        <div class="absolute inset-0 flex items-center justify-center z-20 px-16 pt-10">
            <div class="grid grid-cols-3 gap-x-4 w-full max-w-[780px] items-start justify-center">
                
                <!-- LAPTOP - PRODUK 1: SOTO -->
                <a href="{{ url('/produk/soto-kids') }}" class="flex flex-col items-center justify-start text-center h-full group block select-none">
                    <div class="flex justify-center w-full transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] transform group-hover:-translate-y-4 group-hover:scale-110">
                        <img src="{{ asset('image/foto-soto.png') }}" alt="Soto" class="w-56 h-auto object-contain filter drop-shadow-[0_4px_8px_rgba(0,0,0,0.06)] group-hover:drop-shadow-[0_25px_25px_rgba(4,120,87,0.3)] transition-all duration-500">
                    </div>
                    <h3 class="text-xl font-black text-emerald-700 mt-3 tracking-wide transition-colors duration-300 group-hover:text-emerald-600">Soto</h3>
                    <div class="transform translate-y-2 opacity-0 max-h-0 overflow-hidden transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 group-hover:max-h-32 w-full max-w-[220px]">
                        <p class="text-sm font-bold text-amber-950/90 leading-relaxed mt-1 px-1">Perpaduan ayam kampung dan labu siam dalam bumbu kuning kaya antioksidan.</p>
                    </div>
                </a>

                <!-- LAPTOP - PRODUK 2: SELE BUN -->
                <a href="{{ url('/produk/sele-bun') }}" class="flex flex-col items-center justify-start text-center h-full group block select-none">
                    <div class="flex justify-center w-full transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] transform group-hover:-translate-y-4 group-hover:scale-110">
                        <img src="{{ asset('image/foto-sele-bun.png') }}" alt="Sele Bun" class="w-56 h-auto object-contain filter drop-shadow-[0_4px_8px_rgba(0,0,0,0.06)] group-hover:drop-shadow-[0_25px_25px_rgba(92,58,33,0.35)] transition-all duration-500">
                    </div>
                    <h3 class="text-xl font-black text-[#5c3a21] mt-3 tracking-wide transition-colors duration-300 group-hover:text-[#7a4e2d]">Sele Bun</h3>
                    <div class="transform translate-y-2 opacity-0 max-h-0 overflow-hidden transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 group-hover:max-h-32 w-full max-w-[220px]">
                        <p class="text-sm font-bold text-amber-950/90 leading-relaxed mt-1 px-1">Perpaduan ubi ungu, pisang susu, dan pepaya kaya serat dan vitamin alami.</p>
                    </div>
                </a>

                <!-- LAPTOP - PRODUK 3: LEDOK-LEDOK -->
                <a href="{{ url('/produk/ledok-ledok') }}" class="flex flex-col items-center justify-start text-center h-full group block select-none">
                    <div class="flex justify-center w-full transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] transform group-hover:-translate-y-4 group-hover:scale-110">
                        <img src="{{ asset('image/foto-ledok-ledok.png') }}" alt="Ledok-Ledok" class="w-56 h-auto object-contain filter drop-shadow-[0_4px_8px_rgba(0,0,0,0.06)] group-hover:drop-shadow-[0_25px_25px_rgba(126,34,206,0.3)] transition-all duration-500">
                    </div>
                    <h3 class="text-xl font-black text-purple-700 mt-3 tracking-wide transition-colors duration-300 group-hover:text-purple-600">Ledok</h3>
                    <div class="transform translate-y-2 opacity-0 max-h-0 overflow-hidden transition-all duration-500 ease-out group-hover:translate-y-0 group-hover:opacity-100 group-hover:max-h-32 w-full max-w-[220px]">
                        <p class="text-sm font-bold text-amber-950/90 leading-relaxed mt-1 px-1">Kombinasi sorgum, waluh, bayam, dan telur ayam kampung kaya Vitamin A dan protein.</p>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- =================================================================================== -->
   <!-- =================================================================================== -->
<!-- SECTION 2: TAMPILAN HP (TANPA GARIS/SEKAT) -->
<div class="block md:hidden w-full aspect-[9/16] relative overflow-hidden select-none z-20 bg-transparent" style="backface-visibility: hidden;">
    
    <!-- GIF LATAR BELAKANG -->
    <img src="{{ asset('vidio/background-menu-hp.gif') }}" 
         alt="Background" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none select-none transform scale-[1.005]">

    <!-- LAYER KONTEN: Dibuat agar tetap presisi -->
    <div class="absolute inset-0 z-10 w-full pt-[52%] flex flex-col items-center justify-start">
        
        <!-- Slider -->
        <div id="productSliderMobile" class="flex w-full overflow-x-auto snap-x snap-mandatory scroll-smooth scrollbar-none pb-4" style="scrollbar-width: none; -ms-overflow-style: none;">
            
            <!-- PRODUK 1: SOTO -->
            <div class="w-full flex-shrink-0 snap-center flex justify-center px-10">
                <a href="{{ url('/produk/soto-kids') }}" class="w-full max-w-[260px] flex flex-col items-center text-center bg-transparent group transform transition-all duration-300 active:scale-105">
                    <div class="w-full flex justify-center transition-transform duration-300 dynamic-bounce group-hover:scale-110">
                        <img src="{{ asset('image/foto-soto.png') }}" alt="Soto" class="w-44 h-auto object-contain filter drop-shadow-[0_10px_20px_rgba(0,0,0,0.12)]">
                    </div>
                    <div class="w-full flex flex-col items-center justify-center mt-3 px-2">
                        <h3 class="text-2xl font-black text-[#044e37] font-sans tracking-wide">Soto</h3>
                        <p class="text-xs font-extrabold text-[#4a2e1b] text-center leading-relaxed mt-2 max-w-[220px] mx-auto font-sans">
                            Perpaduan ayam kampung dan labu siam dalam bumbu kuning kaya antioksidan.
                        </p>
                    </div>
                </a>
            </div>

            <!-- PRODUK 2: SELE BUN -->
            <div class="w-full flex-shrink-0 snap-center flex justify-center px-10">
                <a href="{{ url('/produk/sele-bun') }}" class="w-full max-w-[260px] flex flex-col items-center text-center bg-transparent group transform transition-all duration-300 active:scale-105">
                    <div class="w-full flex justify-center transition-transform duration-300 dynamic-bounce group-hover:scale-110">
                        <img src="{{ asset('image/foto-sele-bun.png') }}" alt="Sele Bun" class="w-44 h-auto object-contain filter drop-shadow-[0_10px_20px_rgba(0,0,0,0.12)]">
                    </div>
                    <div class="w-full flex flex-col items-center justify-center mt-3 px-2">
                        <h3 class="text-2xl font-black text-[#5c3a21] font-sans tracking-wide">Sele Bun</h3>
                        <p class="text-xs font-extrabold text-[#4a2e1b] text-center leading-relaxed mt-2 max-w-[220px] mx-auto font-sans">
                            Perpaduan ubi ungu, pisang susu, dan pepaya kaya serat dan vitamin alami.
                        </p>
                    </div>
                </a>
            </div>

            <!-- PRODUK 3: LEDOK -->
            <div class="w-full flex-shrink-0 snap-center flex justify-center px-10">
                <a href="{{ url('/produk/ledok-ledok') }}" class="w-full max-w-[260px] flex flex-col items-center text-center bg-transparent group transform transition-all duration-300 active:scale-105">
                    <div class="w-full flex justify-center transition-transform duration-300 dynamic-bounce group-hover:scale-110">
                        <img src="{{ asset('image/foto-ledok-ledok.png') }}" alt="Ledok-Ledok" class="w-44 h-auto object-contain filter drop-shadow-[0_10px_20px_rgba(0,0,0,0.12)]">
                    </div>
                    <div class="w-full flex flex-col items-center justify-center mt-3 px-2">
                        <h3 class="text-2xl font-black text-purple-900 font-sans tracking-wide">Ledok</h3>
                        <p class="text-xs font-extrabold text-[#4a2e1b] text-center leading-relaxed mt-2 max-w-[220px] mx-auto font-sans">
                            Kombinasi sorgum, waluh, bayam, dan telur ayam kampung kaya Vitamin A dan protein.
                        </p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Indikator -->
       <div class="flex justify-center items-center gap-x-2 -mt-4 mb-4 z-20">
    <span class="dot-indicator w-1.5 h-1.5 rounded-full bg-[#044e37] transition-all duration-300"></span>
    <span class="dot-indicator w-1.5 h-1.5 rounded-full bg-emerald-300 transition-all duration-300"></span>
    <span class="dot-indicator w-1.5 h-1.5 rounded-full bg-emerald-300 transition-all duration-300"></span>
</div>
    </div>
</div>




<!-- ======================================================================================= -->
<!-- TITLE: 3. SCRIPT LOGIK INTEGRASI TITIK INDIKATOR HP (KHUSUS MENANGANI SLIDER MOBILE)  -->
<!-- ======================================================================================= -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const slider = document.getElementById("productSliderMobile");
        const dots = document.querySelectorAll(".dot-indicator");

        if (slider && dots.length > 0) {
            slider.addEventListener("scroll", function () {
                // Menghitung indeks halaman berdasarkan posisi horizontal scroll aktif di HP
                const index = Math.round(slider.scrollLeft / slider.clientWidth);
                
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.remove("bg-emerald-300");
                        dot.classList.add("bg-emerald-800", "scale-110"); // Hijau Pekat (Aktif)
                    } else {
                        dot.classList.remove("bg-emerald-800", "scale-110");
                        dot.classList.add("bg-emerald-300"); // Hijau Muda (Tidak Aktif)
                    }
                });
            });
        }
    });
</script>
<!-- SECTION 3: KENALI AJENGAN RARE (DENGAN EFEK SCROLL) -->
<section id="tentang-kami" class="w-full relative py-24 md:py-32 flex items-center justify-center min-h-[600px] md:min-h-[700px] overflow-hidden">
    
    <!-- BACKGROUND (GIF) -->
    <img src="{{ asset('image/background-kenali-laptop.gif') }}" 
         alt="Background Laptop" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none hidden md:block">
    
    <img src="{{ asset('image/background-section3-hp.gif') }}" 
         alt="Background HP" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none block md:hidden">

    <!-- KONTEN UTAMA -->
    <div class="w-full max-w-[1300px] mx-auto px-6 relative z-20 reveal-element">
        
        <!-- DESAIN LAPTOP -->
        <div class="hidden md:flex items-center justify-between gap-12 text-left w-full">
            <div class="w-80 h-80 flex-shrink-0 flex items-center justify-center transition-transform duration-500 hover:scale-105">
                <img src="{{ asset('image/logo3.png') }}" alt="Ajengan Rare Premium" class="w-full h-full object-contain filter drop-shadow-[0_4px_6px_rgba(0,0,0,0.3)]">
            </div>
            <div class="flex-1 max-w-[800px]">
                <h2 class="text-5xl font-black text-orange-600 mb-6 [text-shadow:_0_2px_4px_rgb(0_0_0_/_30%)]">Kenali Ajengan Rare</h2>
                <p class="text-xl font-medium text-amber-950 leading-relaxed [text-shadow:_0_1px_2px_rgb(255_255_255_/_80%)]">
                    Ajengan Rare merupakan inovasi MPASI <em>ready-to-sip</em> berbahan dasar Jagung Gembal (Sorgum) sebagai solusi praktis pencegahan stunting dan pemberdayaan pangan lokal Buleleng. Kaya serat, protein, vitamin, dan mineral, Ajengan Rare hadir sebagai MPASI tinggi gizi, bebas gluten, tanpa pengawet, serta mudah dikonsumsi.
                </p>
                <div class="mt-8">
                   <a href="{{ url('/jelajahi') }}" class="px-8 py-3.5 bg-orange-600 hover:bg-orange-700 text-white uppercase tracking-wider rounded-full shadow-lg transition">
    Jelajahi
</a>
                </div>
            </div>
        </div>

        <!-- DESAIN HP -->
        <div class="md:hidden flex flex-col items-start w-full pt-12">
            <div class="w-24 h-auto mb-6 flex justify-center w-full">
                <img src="{{ asset('image/logo3.png') }}" alt="Logo" class="w-full h-auto object-contain">
            </div>

            <h2 class="text-4xl font-black text-orange-600 mb-6 leading-tight drop-shadow-md text-left">
                Kenali<br>Ajengan Rare
            </h2>

            <p class="text-xs font-medium text-amber-950 leading-relaxed max-w-[280px] mb-8 text-left">
                Ajengan Rare merupakan inovasi MPASI <em>ready-to-sip</em> berbahan dasar Jagung Gembal (Sorgum) sebagai solusi praktis pencegahan stunting dan pemberdayaan pangan lokal Buleleng. Kaya serat, protein, vitamin, dan mineral, Ajengan Rare hadir sebagai MPASI tinggi gizi, bebas gluten, tanpa pengawet, serta mudah dikonsumsi untuk mendukung tumbuh kembang anak secara optimal.
            </p>

            <a href="{{ url('/jelajahi') }}" class="px-8 py-3.5 bg-orange-600 hover:bg-orange-700 text-white uppercase tracking-wider rounded-full shadow-lg transition">
    Jelajahi
</a>
        </div>
    </div>
</section>
  <!-- SECTION 4: PROSES PRODUKSI / KEUNGGULAN -->
<section id="proses-produksi" class="w-full relative py-24 md:py-32 flex items-center justify-center min-h-[600px] overflow-hidden">
    
    <!-- Background Laptop (TIDAK DIUBAH) -->
    <img src="{{ asset('image/23.gif') }}" 
         alt="Background Laptop" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none hidden md:block">
    
    <!-- Background HP (KHUSUS HP) -->
    <img src="{{ asset('image/background-section4-hp.gif') }}" 
         alt="Background HP" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none block md:hidden">

    <!-- Konten Utama -->
    <div class="w-full max-w-[1100px] mx-auto px-6 relative z-20">
        
        <!-- DESAIN LAPTOP (TIDAK DIUBAH SAMA SEKALI) -->
        <div class="hidden md:flex flex-row-reverse items-center gap-16 text-left w-full reveal-element">
            <div class="flex-1">
                <h2 class="text-5xl font-black text-emerald-700 mb-6 [text-shadow:_0_2px_4px_rgb(255_255_255_/_80%)]">
                    Ajengan Rare Hadir dengan Kualitas Terbaik untuk Si Kecil
                </h2>
                <p class="text-xl font-medium text-amber-950 leading-relaxed max-w-[750px] mb-6 [text-shadow:_0_1px_2px_rgb(255_255_255_/_80%)]">
                    Ajengan Rare dibuat dari sorgum berkualitas asal Desa Panji, Buleleng yang dipadukan dengan sayuran dan protein hewani segar. Setiap bahan dipilih, dicuci, dan diolah secara higienis untuk memastikan kualitas serta keamanan pangan bagi Si Kecil.
                </p>
                <p class="text-xl font-medium text-amber-950 leading-relaxed max-w-[750px] [text-shadow:_0_1px_2px_rgb(255_255_255_/_80%)]">
                    Proses pengolahan dilakukan tanpa pengawet dan penyedap buatan untuk menjaga kandungan gizi tetap optimal. Setelah itu, produk dikemas dalam kemasan food grade yang aman dan melalui kontrol kualitas sebelum didistribusikan kepada konsumen.
                </p>
                <div class="mt-8 flex flex-wrap gap-4 font-bold">
                    <a href="/resep" class="px-8 py-3.5 bg-emerald-700 hover:bg-emerald-800 text-white uppercase tracking-wider rounded-full shadow-lg shadow-emerald-700/30 transition transform hover:-translate-y-0.5 text-base">
                       pelajari
                    </a>
                </div>
            </div>
        </div>

        <!-- DESAIN HP (TAMPILAN KHUSUS MOBILE) -->
        <div class="md:hidden flex flex-col items-start w-full reveal-element">
            <h2 class="text-2xl font-black text-emerald-700 mb-6 leading-tight drop-shadow-md text-left">
                Ajengan Rare Hadir<br>dengan Kualitas <br> Terbaik untuk Si Kecil
            </h2>
            <p class="text-sm font-bold text-amber-950 leading-relaxed mb-6 text-left">
                Ajengan Rare dibuat dari sorgum berkualitas asal Desa Panji, Buleleng yang dipadukan dengan sayuran dan protein hewani segar. Setiap bahan dipilih, dicuci, dan diolah secara higienis untuk memastikan kualitas serta keamanan pangan bagi Si Kecil.
            </p>
            <p class="text-sm font-bold text-amber-950 leading-relaxed mb-8 text-left">
                Proses pengolahan dilakukan tanpa pengawet dan penyedap buatan untuk menjaga kandungan gizi tetap optimal. Setelah itu, produk dikemas dalam kemasan food grade yang aman dan melalui kontrol kualitas sebelum didistribusikan kepada konsumen.
            </p>
            <a href="/resep" class="px-8 py-2 bg-emerald-700 text-white font-bold uppercase tracking-wider rounded-full shadow-lg transition hover:bg-emerald-800 text-sm">
                Pelajari
            </a>
        </div>
    </div>
</section>
<!-- SECTION 5: KEUNGGULAN -->
<section id="keunggulan" class="w-full relative py-16 flex items-center justify-center overflow-hidden">
    
    <!-- Background Laptop -->
    <img src="{{ asset('image/27.gif') }}" alt="Background Laptop" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none hidden md:block">
    
    <!-- Background HP -->
    <img src="{{ asset('image/background-section5-hp.gif') }}" alt="Background HP" class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none block md:hidden">

    <!-- Konten Utama -->
    <div class="w-full max-w-[1000px] mx-auto px-6 relative z-20 reveal-element">
        
        <!-- Judul & Subjudul (REVISI) -->
        <div class="text-center mb-12">
            <!-- Judul HP lebih kecil (text-2xl) dibanding laptop (text-5xl) -->
            <h2 class="text-2xl md:text-5xl font-black text-orange-600 mb-1 [text-shadow:_0_2px_4px_rgb(255_255_255_/_80%)]">
                Pilihan Tepat untuk Si Kecil
            </h2>
            <!-- Subjudul lebih kecil dan margin bawah diperkecil agar rapat -->
            <p class="text-amber-950 font-medium text-sm md:text-lg">
                Keunggulan Produk Ajengan Rare
            </p>
        </div>

        <!-- Grid 4 Kolom -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-12">
            
            <!-- Item 1 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/unggul1.png') }}" alt="Keunggulan 1" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-normal text-amber-950 text-center px-2 leading-relaxed">
                    Dikemas dalam spouted pouch steril yang aman
                </p>
            </div>

            <!-- Item 2 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/unggul2.png') }}" alt="Keunggulan 2" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-normal text-amber-950 text-center px-2 leading-relaxed">
                    Sesuai standar Kemenkes
                </p>
            </div>

            <!-- Item 3 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/9.png') }}" alt="Keunggulan 3" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-normal text-amber-950 text-center px-2 leading-relaxed">
                    Mendukung SDG 2 dan SDG 3
                </p>
            </div>

            <!-- Item 4 -->
            <div class="flex flex-col items-center">
                <div class="w-28 h-28 md:w-40 md:h-40 flex items-center justify-center transition-transform duration-500 hover:scale-105 mb-4">
                    <img src="{{ asset('image/10.png') }}" alt="Keunggulan 4" class="w-full h-full object-contain">
                </div>
                <p class="text-sm md:text-md font-normal text-amber-950 text-center px-2 leading-relaxed">
                    Meningkatkan nilai jual sorgum petani lokal hingga 30%
                </p>
            </div>

        </div>
    </div>
</section>
<<!-- ======================================================================================= -->
<!-- 1. SECTION LAPTOP (DIPERBAIKI: PAKSA NAIK UNTUK MENUTUP ELEMEN HIJAU)                    -->
<!-- ======================================================================================= -->
<!-- PERBAIKAN: 
     1. Ditambahkan -mt-24 (atau sesuaikan nilainya) untuk menarik section ini naik ke atas elemen hijau.
     2. Ditambahkan z-30 agar tumpukan background bergelombang krem/biru berada DI ATAS garis hijau tersebut. -->
<section id="temukan-kami" class="hidden md:flex w-full relative py-32 md:py-48 flex-col items-center justify-center overflow-hidden bg-[#fff8e7] -mt-24 z-30">
    
    <!-- Background Laptop Asli -->
    <img src="{{ asset('image/30.png') }}" 
         alt="Background Temukan Kami" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">

    <!-- Konten Utama Laptop Asli -->
    <div class="w-full max-w-[1100px] mx-auto px-6 relative z-20 reveal-element">
        
        <div class="text-center mb-24">
            <h2 class="text-5xl md:text-7xl font-black text-[#5c3a21] mb-6 [text-shadow:_0_4px_8px_rgb(255_255_255_/_80%)]">
                Temukan Kami
            </h2>
            <p class="text-emerald-900 font-bold text-xl md:text-2xl">
                Mari terhubung dan tumbuh bersama kami
            </p>
        </div>

        <div class="grid grid-cols-4 gap-20">
    
            <!-- WhatsApp -->
            <a href="https://wa.me/085739202022" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-36 h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/whatsapp.png') }}" alt="WhatsApp" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">WhatsApp</span>
            </a>

            <!-- Instagram -->
            <a href="https://instagram.com/mpasi.ajenganrare" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-36 h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/instagram.png') }}" alt="Instagram" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">Instagram</span>
            </a>

            <!-- TikTok -->
            <a href="https://tiktok.com/@mpasi.ajenganrare" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-36 h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/tiktok.png') }}" alt="TikTok" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">TikTok</span>
            </a>

            <!-- Komunitas -->
            <a href="https://chat.whatsapp.com/GJH25pkq2qr7VHSSgjRr5B" target="_blank" class="flex flex-col items-center group transition-all duration-500 hover:-translate-y-4">
                <div class="w-36 h-36 flex items-center justify-center mb-6">
                    <img src="{{ asset('image/komunitas.png') }}" alt="Komunitas" class="w-full h-full object-contain">
                </div>
                <span class="font-black text-lg text-[#5c3a21]">Komunitas</span>
            </a>

        </div>
    </div>
</section>
<<section id="temukan-kami-hp" class="flex md:hidden w-full relative py-20 flex-col items-center justify-center overflow-hidden -mt-[40px] z-30">
    <img src="{{ asset('image/background-section6-hp.png') }}" 
         alt="Background Temukan Kami HP" 
         class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none select-none">

    <div class="w-full relative z-10 px-6 flex flex-col items-center text-center">
        
        <div class="mb-14">
            <h2 class="text-4xl font-black text-[#5c3a21] mb-3 [text-shadow:_0_2px_4px_rgba(255,255,255,0.8)]">
                Temukan Kami
            </h2>
            <p class="text-emerald-900 font-extrabold text-sm max-w-[280px] mx-auto leading-relaxed">
                Mari terhubung dan tumbuh bersama kami
            </p>
        </div>

        <div class="grid grid-cols-2 gap-x-10 gap-y-12 w-full max-w-[320px] mx-auto">
    
            <a href="https://wa.me/085739202022" target="_blank" class="flex flex-col items-center group active:scale-95 transition-transform duration-300">
                <div class="w-20 h-20 flex items-center justify-center mb-3">
                    <img src="{{ asset('image/whatsapp.png') }}" alt="WhatsApp" class="w-full h-full object-contain filter drop-shadow-[0_4px_6px_rgba(0,0,0,0.08)]">
                </div>
                <span class="font-black text-base text-[#5c3a21]">WhatsApp</span>
            </a>

            <a href="https://instagram.com/mpasi.ajenganrare" target="_blank" class="flex flex-col items-center group active:scale-95 transition-transform duration-300">
                <div class="w-20 h-20 flex items-center justify-center mb-3">
                    <img src="{{ asset('image/instagram.png') }}" alt="Instagram" class="w-full h-full object-contain filter drop-shadow-[0_4px_6px_rgba(0,0,0,0.08)]">
                </div>
                <span class="font-black text-base text-[#5c3a21]">Instagram</span>
            </a>

            <a href="https://tiktok.com/@mpasi.ajenganrare" target="_blank" class="flex flex-col items-center group active:scale-95 transition-transform duration-300">
                <div class="w-20 h-20 flex items-center justify-center mb-3">
                    <img src="{{ asset('image/tiktok.png') }}" alt="TikTok" class="w-full h-full object-contain filter drop-shadow-[0_4px_6px_rgba(0,0,0,0.08)]">
                </div>
                <span class="font-black text-base text-[#5c3a21]">TikTok</span>
            </a>

            <a href="https://chat.whatsapp.com/GJH25pkq2qr7VHSSgjRr5B" target="_blank" class="flex flex-col items-center group active:scale-95 transition-transform duration-300">
                <div class="w-20 h-20 flex items-center justify-center mb-3">
                    <img src="{{ asset('image/komunitas.png') }}" alt="Komunitas" class="w-full h-full object-contain filter drop-shadow-[0_4px_6px_rgba(0,0,0,0.08)]">
                </div>
                <span class="font-black text-base text-[#5c3a21]">Komunitas</span>
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