@extends('layouts.app')

@section('content')
<div x-data="{ section2Visible: false }" class="w-full bg-[#faf8f5] overflow-hidden flex flex-col"> 

    <div class="hidden md:flex w-full h-screen relative bg-[length:100%_auto] bg-bottom bg-no-repeat flex-col justify-end pb-16 px-12 m-0 p-0" 
         style="background-image: url('{{ asset('image/jelajahi.png') }}');">
    </div>

    <div class="flex md:hidden w-full h-screen relative bg-[length:100%_100%] bg-center bg-no-repeat flex-col justify-end pb-12 px-6 m-0 p-0" 
         style="background-image: url('{{ asset('image/hp.png') }}');">
    </div>

    <div id="section2"
         class="hidden md:flex w-full min-h-screen relative overflow-hidden bg-cover bg-center bg-no-repeat items-center justify-end py-16 px-16 lg:pe-64 lg:ps-32 -mt-2"
         style="background-image: url('{{ asset('image/kenali.png') }}');">

        <div class="w-full max-w-[1250px] mx-auto grid grid-cols-2 gap-4 relative z-10">
            <div class="hidden md:block"></div>

            <div class="w-full text-left max-w-[480px] md:ml-auto relative z-20 reveal-element">
                <h2 class="text-3xl font-black text-[#e05a26] mb-5 leading-tight tracking-wide drop-shadow-[0_2px_4px_rgba(255,255,255,1)]">
                    Yuk Kenalan sama <br class="hidden sm:inline"> Ajengan Rare
                </h2>

                <div class="space-y-4 text-sm font-bold text-black leading-relaxed drop-shadow-[0_1.5px_2px_rgba(255,255,255,1)]">
                    <p>
                        Ajengan Rare adalah produk pelopor MPASI (Makanan Pendamping 
Asi) Sorgum siap konsumsi (ready-to-sip) yang diformulasikan khusus untuk 
memenuhi kebutuhan gizi bayi usia 6-8 bulan dan pencegahan stunting. 
                    <p>
                        Berbeda dengan standar MPASI berbasis beras, produk ini mengkombinasikan 
karbohidrat kompleks dari  <span class="text-[#e05a26] font-black">"Sorgum khas Buleleng "</span>, serta <span class="text-[#e05a26] font-black">" bahan pangan 
fungsional lokal "</span>,  menjadi MPASI yang padat nutrisi serta praktis dengan 
kemasan spouted pouch modern.  
                    </p>
                    <p>
                        Produk dikemas menggunakan teknologi<span class="font-black text-amber-950"> spouted pouch </span>, yang telah 
disterilisasi. Konsumen cukup membuka tutup pouch dan produk siap 
dikonsumsi dengan cara disedot langsung atau dituangkan ke sendok. Untuk 
varian Ledok-Ledok dan Soto, produk dapat dihangatkan dengan merendam 
kemasan dalam air hangat selama 2 menit guna meningkatkan rasa bagi bayi.
                    </p>
                </div>
            </div> 
        </div> 
    </div> 

    <div id="section2-hp"
         class="flex md:hidden w-full min-h-screen relative overflow-hidden bg-[length:100%_100%] bg-center bg-no-repeat items-start justify-start pt-8 pb-16 px-10 -mt-2"
         style="background-image: url('{{ asset('image/hp3.png') }}');">

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

</div> <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
@endsection