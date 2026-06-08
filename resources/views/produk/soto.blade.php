@extends('layouts.app')

@section('content')
<div class="max-w-[1200px] mx-auto min-h-screen flex items-center px-4 md:px-8 py-10">
    <div class="flex flex-col md:flex-row items-center gap-6 md:gap-12 bg-black/30 backdrop-blur-md p-6 md:p-12 rounded-3xl w-full">
        
        <div class="w-full md:w-5/12 flex justify-center">
            <img src="{{ asset('image/soto.png') }}" alt="Produk" class="w-48 md:w-full max-w-[400px] drop-shadow-2xl">
        </div>

        <div class="w-full md:w-7/12 text-white text-center md:text-left">
            <p class="mb-2 text-sm md:text-lg opacity-80 uppercase tracking-widest">Home > Produk</p>
            <h1 class="text-3xl md:text-6xl font-black mb-4">Soto Kids</h1>
            <p class="text-sm md:text-xl leading-relaxed mb-8">
                Nutrisi kaldu ayam kampung murni dengan sorgum pilihan untuk mendukung tumbuh kembang si kecil.
            </p>
            
            <div class="flex flex-col md:flex-row gap-3">
                <a href="#" class="bg-yellow-400 text-green-900 font-bold py-3 px-8 rounded-full text-center hover:scale-105 transition-transform">Beli Sekarang</a>
                <a href="/" class="border-2 border-white text-white font-bold py-3 px-8 rounded-full text-center hover:bg-white hover:text-black transition-colors">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
</div>
@endsection