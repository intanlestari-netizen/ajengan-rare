@extends('layouts.app')

@section('content')
<!-- Container utama dengan overflow-hidden dan flex-col untuk mengunci kerapatan antar section -->
<div x-data="{ section2Visible: false }" class="w-full bg-[#faf8f5] overflow-hidden flex flex-col"> 

    <!-- ==================================================== -->
    <!-- SECTION 1: JELAJAHI / HERO BANNER                    -->
    <!-- ==================================================== -->
    <div class="hidden md:flex w-full h-screen relative bg-[length:100%_auto] bg-bottom bg-no-repeat flex-col justify-end pb-16 px-12 m-0 p-0" 
         style="background-image: url('{{ asset('image/ledok2.png') }}');">
    </div>

    <div class="flex md:hidden w-full h-screen relative bg-[length:100%_100%] bg-center bg-no-repeat flex-col justify-end pb-12 px-6 m-0 p-0" 
         style="background-image: url('{{ asset('image/ledok4.png') }}');">
    </div>

    <!-- ==================================================== -->
    <!-- SECTION 2: YUK KENALAN (KHUSUS LAPTOP)               -->
    <!-- ==================================================== -->
    <!-- Tetap menggunakan bg-cover sesuai keinginanmu, namun disembunyikan di HP menggunakan hidden md:flex -->
    <div id="section2" 
         class="hidden md:flex w-full min-h-screen relative overflow-hidden bg-cover bg-center bg-no-repeat items-center justify-end py-16 px-6 md:px-16 lg:pe-64 lg:ps-32 -mt-2"
         style="background-image: url('{{ asset('image/resep.png') }}');">
        
        <!-- GRID CONTAINER: Sisi kiri kosong, teks mengunci di kanan -->
        <div class="w-full max-w-[1250px] mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 relative z-10">
            
            <div class="hidden md:block"></div>

            <div class="w-full text-left max-w-[480px] md:ml-auto relative z-20 reveal-element">
                <h2 class="text-2xl md:text-3xl font-black text-[#e05a26] mb-5 leading-tight tracking-wide drop-shadow-[0_2px_4px_rgba(255,255,255,1)]">
                    Yuk Kenalan sama <br class="hidden sm:inline"> Plum & Blum
                </h2>
                
                <div class="space-y-4 text-xs md:text-sm font-bold text-black leading-relaxed drop-shadow-[0_1.5px_2px_rgba(255,255,255,1)]">
                    <p>
                        Proses produksi Ajengan Rare dilakukan secara terstruktur dengan mengutamakan kualitas bahan, higienitas, serta keamanan pangan untuk bayi. Tahapan diawali dengan pemilihan bahan baku utama berupa sorgum berkualitas tinggi di Desa Panji, Buleleng yang dipadukan dengan bahan pendamping seperti sayuran dan protein hewani segar. Seluruh bahan kemudian melalui proses pencucian dan sortasi untuk memastikan kebersihan serta kelayakan konsumsi. Selanjutnya, bahan diolah melalui proses pemasakan dengan metode yang mempertahankan nilai gizi, seperti pengukusan atau perebusan tanpa tambahan bahan pengawet dan penyedap buatan.

                    <p>
                        setelah proses pemasakan, bahan dihaluskan hingga mencapai tekstur yang sesuai dengan standar MPASI, kemudian dilakukan proses pengemasan secara higienis menggunakan kemasan food grade yang aman.
                        
            </div>
        </div>
    </div>

    <!-- ==================================================== -->
    <!-- SECTION 2: KENALI AJENGAN RARE (KHUSUS HP)           -->
    <!-- ==================================================== -->
    <!-- Hanya aktif di HP (flex md:hidden). Desain background dikunci pas, teks naik ke atas & diperkecil -->
    <div id="section2-hp"
         class="flex md:hidden w-full min-h-screen relative overflow-hidden bg-[length:100%_100%] bg-center bg-no-repeat items-start justify-start pt-8 pb-16 px-10 -mt-2"
         style="background-image: url('{{ asset('image/ledok3.png') }}');">

        <div class="w-full relative z-20 reveal-element flex flex-col text-left">
            
            <h2 class="text-4xl font-extrabold text-[#e05a26] mb-5 leading-tight tracking-wide drop-shadow-[0_2px_3px_rgba(255,255,255,0.6)]">
                Kenali <br> Ajengan Rare
            </h2>

            <div class="text-[11px] font-bold text-[#4a2e1b] text-justify leading-relaxed space-y-4 drop-shadow-[0_1px_1px_rgba(255,255,255,0.5)]">
                <p>
                    Ajengan Rare merupakan inovasi MPASI <span class="italic font-medium">ready-to-sip</span> berbahan dasar Jagung Gembal (Sorgum) sebagai solusi praktis pencegahan stunting dan pemberdayaan pangan lokal Buleleng. Kaya serat, protein, vitamin, dan mineral, Ajengan Rare hadir sebagai MPASI tinggi gizi, bebas gluten, tanpa pengawet, serta mudah dikonsumsi untuk mendukung tumbuh kembang anak secara optimal.
                </p>
            </div>

        </div> 
    </div>

</div>

<script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
@endsection