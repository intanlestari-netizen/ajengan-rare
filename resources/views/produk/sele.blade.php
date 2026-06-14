@extends('layouts.app')

@section('content')
<!-- WADAH UTAMA ALPINE.JS (Membungkus Laptop, HP, dan Modal agar satu sistem) -->
<div x-data="{ open: false }" class="w-full">

    <!-- ========================================== -->
    <!-- 1. TAMPILAN KHUSUS LAPTOP / DESKTOP        -->
    <!-- ========================================== -->
    <div class="hidden md:flex w-full min-h-screen relative overflow-hidden bg-cover bg-center bg-no-repeat items-center justify-start py-4 px-8 lg:px-12" 
         style="background-image: url('{{ asset('image/selebunproduk.gif') }}');">
        
        <div class="w-full relative z-10 flex flex-row items-center justify-start md:-space-x-20 text-white -mt-24">
            <!-- Foto Produk Utama Laptop -->
            <div class="w-auto flex-shrink-0 relative z-20">
                <img src="{{ asset('image/foto-sele-bun.png') }}" alt="Produk" class="w-full max-w-[440px] drop-shadow-2xl object-contain">
            </div>

            <!-- Deskripsi Hero Laptop -->
            <div class="max-w-[480px] text-left flex flex-col items-start relative z-10 pl-2">
                <h1 class="text-6xl font-black mb-3 text-[#A3E635] drop-shadow-[0_2px_4px_rgba(0,0,0,0.6)] tracking-wide">
                    Sele Bun 
                </h1>
                <p class="text-xl leading-relaxed mb-6 font-bold text-black w-full drop-shadow-[0_1px_2px_rgba(255,255,255,0.5)]">
                    varian sele bun baik untuk pencernaan <br class="hidden sm:inline">bayi karna terbuat dari ubi, <br class="hidden sm:inline">pisang dan pepaya
                </p>
                <!-- Tombol Beli Laptop -->
                <button @click="open = true" class="bg-yellow-400 text-green-900 font-extrabold py-3.5 px-14 rounded-full text-center hover:scale-105 transition-transform duration-300 shadow-md focus:outline-none">
                    Beli Sekarang
                </button>
            </div>
        </div>
    </div>


    <!-- ========================================== -->
    <!-- 2. TAMPILAN KHUSUS HP / MOBILE             -->
    <!-- ========================================== -->
    <div class="flex md:hidden w-full min-h-screen relative overflow-hidden bg-[length:100%_100%] bg-center bg-no-repeat flex flex-col justify-start pt-4 pb-6 px-6 text-white" 
         style="background-image: url('{{ asset('image/gumi bali.gif') }}');">
        
        <!-- Atas: Judul -->
        <div class="w-full text-center mb-2 relative z-10">
            <h1 class="text-3xl font-black text-[#A3E635] drop-shadow-[0_2px_4px_rgba(0,0,0,0.8)] tracking-wide">
                Sele Bun
            </h1>
        </div>

        <!-- Atas-Tengah: Deskripsi -->
        <div class="w-full flex justify-center mb-2 relative z-10">
            <p class="text-[11px] font-bold text-black leading-snug text-center max-w-[220px] drop-shadow-[0_1px_2px_rgba(255,255,255,0.8)]">
                varian sele bun baik untuk pencernaan bayi karna terbuat dari ubi, pisang dan pepaya
            </p>
        </div>

        <!-- Tengah: Foto Produk -->
        <div class="w-full flex items-center justify-center my-0 -mt-2 relative z-10">
            <img src="{{ asset('image/foto-sele-bun.png') }}" alt="Produk" class="w-44 drop-shadow-2xl object-contain">
        </div>

        <!-- Bawah: Tombol Beli Sekarang -->
        <div class="w-full flex flex-col items-center mt-auto relative z-10">
            <button @click="open = true" class="bg-yellow-400 text-green-900 font-black py-1 px-4 rounded-full text-center text-[10px] active:scale-95 transition-transform duration-150 w-full max-w-[120px] shadow-md border border-white/20 focus:outline-none">
                Beli Sekarang
            </button>
        </div>
    </div>

    <!-- ========================================== -->
    <!-- 3. MODAL POP-UP (Terhubung ke Laptop & HP) -->
    <!-- ========================================== -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/60 backdrop-blur-sm"
         x-cloak>
        
        <div @click.away="open = false" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="bg-[#EBF7E3] w-full max-w-[500px] rounded-3xl p-5 md:p-8 relative shadow-2xl overflow-y-auto max-h-[85vh] sm:max-h-[90vh] border-4 border-white/40 text-left">
            
            <button @click="open = false" class="absolute top-3 right-4 text-3xl font-black text-amber-500 hover:scale-110 transition-transform focus:outline-none z-50">
                &times;
            </button>

            <div class="mb-1">
                <h2 class="text-xl md:text-2xl font-black text-[#15803d] tracking-wide">Dapatkan Produk</h2>
            </div>
            
            <div class="flex flex-col items-center text-center p-2 mb-3">
                <img src="{{ asset('image/foto-sele-bun.png') }}" alt="Produk Sele Bun" class="w-44 sm:w-56 object-contain drop-shadow-2xl">
                <h3 class="text-3xl md:text-4xl font-black text-[#15803d] mt-3 tracking-wide">Sele Bun</h3>
            </div>

            <div class="mb-4">
                <p class="text-xs font-black text-[#15803d] mb-1.5 uppercase tracking-wide">Rasa</p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-[#FEF9E7] text-amber-800 text-xs md:text-sm font-bold px-4 py-2 rounded-xl border border-amber-200/60 shadow-sm">
                        Sele Bun
                    </span>
                </div>
            </div>

            <div class="mb-4">
                <p class="text-xs font-black text-[#15803d] mb-1.5 uppercase tracking-wide">Netto</p>
                <div class="flex">
                    <span class="bg-amber-500 text-white text-xs md:text-sm font-black px-5 py-2 rounded-xl shadow-md border border-amber-600/20 tracking-wide">
                        100 Gram
                    </span>
                </div>
            </div>

            <!-- Pilihan Marketplace -->
            <div class="space-y-3">
                <p class="text-xs font-black text-[#15803d] mb-1 uppercase tracking-wide">Dapatkan Di :</p>
                
                <div class="bg-white p-3 rounded-2xl flex items-center justify-between shadow-[0_4px_12px_rgba(0,0,0,0.03)] border border-gray-100/50 hover:border-orange-200 transition-colors gap-2">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center overflow-hidden rounded-xl flex-shrink-0">
                            <img src="{{ asset('image/sopi.png') }}" alt="Logo Shopee" class="w-full h-full object-contain">
                        </div>
                        <div class="truncate">
                            <h4 class="font-black text-xs sm:text-sm text-gray-800 leading-none">Shopee</h4>
                            <span class="text-[10px] font-medium text-gray-400 block truncate mt-1">Sele Bun Official Store</span>
                        </div>
                    </div>
                    <a href="https://shopee.co.id" target="_blank" class="bg-[#15803d] hover:bg-[#166534] text-white font-extrabold text-[11px] sm:text-xs py-2.5 px-4 rounded-full shadow-sm transition-all flex-shrink-0">
                        Beli Sekarang
                    </a>
                </div>
                
                <div class="bg-white p-3 rounded-2xl flex items-center justify-between shadow-[0_4px_12px_rgba(0,0,0,0.03)] border border-gray-100/50 hover:border-green-200 transition-colors gap-2">
                    <div class="flex items-center gap-2.5 min-w-0">
                        <div class="w-10 h-10 sm:w-12 sm:h-12 flex items-center justify-center overflow-hidden rounded-xl flex-shrink-0">
                            <img src="{{ asset('image/toko.png') }}" alt="Logo Tokopedia" class="w-full h-full object-contain">
                        </div>
                        <div class="truncate">
                            <h4 class="font-black text-xs sm:text-sm text-gray-800 leading-none">Tokopedia</h4>
                            <span class="text-[10px] font-medium text-gray-400 block truncate mt-1">Sele Bun Official Store</span>
                        </div>
                    </div>
                    <a href="https://tokopedia.com" target="_blank" class="bg-[#15803d] hover:bg-[#166534] text-white font-extrabold text-[11px] sm:text-xs py-2.5 px-4 rounded-full shadow-sm transition-all flex-shrink-0">
                        Beli Sekarang
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>

<!-- ========================================================= -->
<!-- SECTION 2: TAMPILAN LAPTOP (ASLI / TIDAK DIUBAH SAMA SEKALI)-->
<!-- ========================================================= -->
<div class="hidden md:flex w-full min-h-screen relative overflow-hidden bg-cover bg-center bg-no-repeat flex flex-col items-center justify-start py-12 px-6 md:px-16 lg:px-28 gap-8" 
     style="background-image: url('{{ asset('image/gumi.png') }}');">
    
    <!-- Judul & Deskripsi Atas -->
    <div class="w-full max-w-[950px] text-center relative z-10 px-2">
        <h2 class="text-2xl md:text-5xl font-black text-[#15803d] mb-3 tracking-wide drop-shadow-md leading-tight">
           Ajengan Rare Hadir Sebagai Solusi
        </h2>
        <p class="text-xs md:text-xl font-medium text-gray-700 max-w-[650px] mx-auto leading-relaxed">
          Ajengan Rare, solusi MPASI sehat berbasis kearifan lokal Bali yang praktis, ready-to-sip, dan kaya nutrisi untuk mendukung tumbuh kembang optimal bayi
        </p>
    </div>
    
    <!-- Bagian Kartu Accordion -->
    <div class="w-full md:max-w-[550px] md:ml-auto relative z-10 flex flex-col gap-3 text-left">
        
        <!-- KARTU 1 -->
        <details class="w-full bg-white rounded-xl shadow-[0_3px_10px_rgba(0,0,0,0.04)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-3 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center text-white text-base font-bold shadow-sm flex-shrink-0">🌱</div>
                    <span class="text-xs sm:text-sm md:text-base font-bold text-[#15803d]">Tanpa Pengawet & Gula Tambahan</span>
                </div>
                <div class="w-5 h-5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[8px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-3 pb-4 pt-1 text-xs md:text-sm text-gray-600 leading-relaxed border-t border-gray-50 mt-1">
                Dibuat murni dari bahan alami pilihan tanpa tambahan pengawet kimia maupun gula buatan, sehingga sangat aman untuk pencernaan sensitif Si Kecil.
            </div>
        </details>

        <!-- KARTU 2 -->
        <details class="w-full bg-white rounded-xl shadow-[0_3px_10px_rgba(0,0,0,0.04)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-3 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center text-white text-base font-bold shadow-sm flex-shrink-0">🍼</div>
                    <span class="text-xs sm:text-sm md:text-base font-bold text-[#15803d]">Ready-to-Sip</span>
                </div>
                <div class="w-5 h-5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[8px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-3 pb-4 pt-1 text-xs md:text-sm text-gray-600 leading-relaxed border-t border-gray-50 mt-1">
                Kemasan praktis yang siap dikonsumsi kapan saja dan di mana saja. Cukup buka tutupnya, Si Kecil bisa langsung menikmati nutrisi sup hangat dengan mudah.
            </div>
        </details>

        <!-- KARTU 3 -->
        <details class="w-full bg-white rounded-xl shadow-[0_3px_10px_rgba(0,0,0,0.04)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-3 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center text-white text-base font-bold shadow-sm flex-shrink-0">🌾</div>
                    <span class="text-xs sm:text-sm md:text-base font-bold text-[#15803d]">Gluten Free & Tinggi Serat</span>
                </div>
                <div class="w-5 h-5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[8px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-3 pb-4 pt-1 text-xs md:text-sm text-gray-600 leading-relaxed border-t border-gray-50 mt-1">
                Menggunakan sorgum pilihan yang secara alami bebas gluten serta kaya akan serat alami untuk melancarkan pencernaan dan menjaga imun tubuh anak.
            </div>
        </details>

        <!-- KARTU 4 -->
        <details class="w-full bg-white rounded-xl shadow-[0_3px_10px_rgba(0,0,0,0.04)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-3 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-amber-500 rounded-lg flex items-center justify-center text-white text-base font-bold shadow-sm flex-shrink-0">🏝️</div>
                    <span class="text-xs sm:text-sm md:text-base font-bold text-[#15803d]">Bahan Lokal Bali Berkualitas</span>
                </div>
                <div class="w-5 h-5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[8px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-3 pb-4 pt-1 text-xs md:text-sm text-gray-600 leading-relaxed border-t border-gray-50 mt-1">
                Diproduksi menggunakan ayam kampung murni dan hasil pertanian lokal Bali segar pilihan yang diawasi ketat kualitas mutu dan gizinya.
            </div>
        </details>
    </div>
</div>


<!-- ========================================================= -->
<!-- SECTION 2: TAMPILAN BARU KHUSUS HP (BACKGROUND GUMI4)      -->
<!-- ========================================================= -->
<!-- Menggunakan pb-10 agar posisi konten berada di titik tengah-bawah yang ideal sesuai rujukan terakhir -->
<div class="flex md:hidden w-full min-h-screen relative overflow-hidden bg-[length:100%_100%] bg-center bg-no-repeat flex flex-col items-center justify-end pb-10 pt-4 px-6 gap-5" 
     style="background-image: url('{{ asset('image/gumi4.png') }}');">
    
    <!-- Judul & Deskripsi Atas -->
    <div class="w-full text-center relative z-10 px-2 flex flex-col gap-1.5">
        <h2 class="text-2xl font-black text-[#15803d] tracking-wide drop-shadow-md leading-tight">
           Ajengan Rare Hadir Sebagai Solusi
        </h2>
        <p class="text-xs font-semibold text-gray-700 max-w-[280px] mx-auto leading-relaxed drop-shadow-[0_1px_1px_rgba(255,255,255,0.5)]">
          Ajengan Rare, solusi MPASI sehat berbasis kearifan lokal Bali yang praktis, ready-to-sip, dan kaya nutrisi untuk mendukung tumbuh kembang optimal bayi
        </p>
    </div>
    
    <!-- Bagian Kartu Accordion -->
    <div class="w-full relative z-10 flex flex-col gap-2 text-left max-w-[330px]">
        
        <!-- KARTU 1 HP -->
        <details class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.03)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-2.5 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-amber-500 rounded flex items-center justify-center text-white text-xs font-bold flex-shrink-0">🌱</div>
                    <span class="text-[11px] font-bold text-[#15803d] leading-none">Tanpa Pengawet & Gula Tambahan</span>
                </div>
                <div class="w-3.5 h-3.5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[6px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-2.5 pb-3 pt-0.5 text-[10px] text-gray-600 leading-normal border-t border-gray-50 mt-1">
                Dibuat murni dari bahan alami pilihan tanpa tambahan pengawet kimia maupun gula buatan, sehingga sangat aman untuk pencernaan sensitif Si Kecil.
            </div>
        </details>

        <!-- KARTU 2 HP -->
        <details class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.03)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-2.5 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-amber-500 rounded flex items-center justify-center text-white text-xs font-bold flex-shrink-0">🍼</div>
                    <span class="text-[11px] font-bold text-[#15803d] leading-none">Ready-to-Sip</span>
                </div>
                <div class="w-3.5 h-3.5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[6px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-2.5 pb-3 pt-0.5 text-[10px] text-gray-600 leading-normal border-t border-gray-50 mt-1">
                Kemasan praktis yang siap dikonsumsi kapan saja dan di mana saja. Cukup buka tutupnya, Si Kecil bisa langsung menikmati nutrisi sup hangat dengan mudah.
            </div>
        </details>

        <!-- KARTU 3 HP -->
        <details class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.03)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-2.5 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-amber-500 rounded flex items-center justify-center text-white text-xs font-bold flex-shrink-0">🌾</div>
                    <span class="text-[11px] font-bold text-[#15803d] leading-none">Gluten Free & Tinggi Serat</span>
                </div>
                <div class="w-3.5 h-3.5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[6px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-2.5 pb-3 pt-0.5 text-[10px] text-gray-600 leading-normal border-t border-gray-50 mt-1">
                Menggunakan sorgum pilihan yang secara alami bebas gluten serta kaya akan serat alami untuk melancarkan pencernaan dan menjaga imun tubuh anak.
            </div>
        </details>

        <!-- KARTU 4 HP -->
        <details class="w-full bg-white rounded-xl shadow-[0_2px_8px_rgba(0,0,0,0.03)] border border-gray-100 transition-all duration-300 group">
            <summary class="flex items-center justify-between w-full p-2.5 cursor-pointer list-none focus:outline-none">
                <div class="flex items-center gap-2">
                    <div class="w-6 h-6 bg-amber-500 rounded flex items-center justify-center text-white text-xs font-bold flex-shrink-0">🏝️</div>
                    <span class="text-[11px] font-bold text-[#15803d] leading-none">Bahan Lokal Bali Berkualitas</span>
                </div>
                <div class="w-3.5 h-3.5 rounded-full bg-[#15803d] flex items-center justify-center text-white text-[6px] font-bold transition-transform duration-300 group-open:rotate-180 flex-shrink-0">▼</div>
            </summary>
            <div class="px-2.5 pb-3 pt-0.5 text-[10px] text-gray-600 leading-normal border-t border-gray-50 mt-1">
                Diproduksi menggunakan ayam kampung murni dan hasil pertanian lokal Bali segar pilihan yang diawasi ketat kualitas mutu dan gizinya.
            </div>
        </details>
    </div>
</div>
@endsection