@extends('layouts.app')

@section('content')
<div class="max-w-[1200px] mx-auto min-h-screen flex items-center px-8">
    <div class="flex flex-col md:flex-row items-center gap-12 bg-black/20 backdrop-blur-sm p-10 rounded-3xl">
        <div class="w-full md:w-5/12">
            <!-- Pastikan nama file gambar sesuai -->
            <img src="{{ asset('image/ledok.png') }}" alt="Ledok-Ledok" class="w-full drop-shadow-2xl">
        </div>
        <div class="w-full md:w-7/12 text-white">
            <p class="mb-4 text-lg">Home > <span class="font-bold">Ledok-Ledok</span></p>
            <h1 class="text-6xl font-black mb-6">Ledok-Ledok</h1>
            <p class="text-xl leading-relaxed mb-8">
                Bubur gurih khas Buleleng yang diperkaya dengan sayuran segar untuk asupan serat harian si kecil.
            </p>
            <div class="flex gap-4">
                <a href="#" class="bg-yellow-400 text-green-900 font-bold py-4 px-8 rounded-full shadow-lg">Beli Sekarang</a>
                <a href="/" class="border-2 border-white text-white font-bold py-4 px-8 rounded-full">Lihat Produk Lain</a>
            </div>
        </div>
    </div>
</div>
@endsection