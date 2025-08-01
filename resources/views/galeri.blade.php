@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<div class="max-w-6xl mx-auto text-center">
    <h2 class="text-4xl font-bold mb-6 animate__animated animate__fadeInDown">Galeri Produk</h2>
    <p class="mb-10 text-yellow-200 animate__animated animate__fadeIn">Tepung berkualitas tinggi untuk semua kebutuhan dapurmu.</p>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        @foreach (range(1,6) as $i)
        <div class="bg-white rounded-xl overflow-hidden shadow-lg transform hover:scale-105 transition duration-500">
            <img src="https://source.unsplash.com/400x300/?flour,{{ $i }}" alt="Foto produk {{ $i }}" class="w-full h-48 object-cover">
            <div class="p-4 text-red-900">
                <h3 class="font-semibold text-lg">Tepung Janis #{{ $i }}</h3>
                <p class="text-sm mt-1">Tepung pilihan untuk hasil terbaik.</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
