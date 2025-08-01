@extends('layouts.app')
@section('title', 'Produk')

@section('content')
<section class="py-20 px-6 max-w-6xl mx-auto text-center">
  <h2 class="text-4xl font-extrabold text-yellow-300 mb-12 animate__animated animate__fadeInDown">Daftar Produk</h2>

  <div class="grid md:grid-cols-3 gap-8">
    @foreach ([['Tepung Serbaguna', 'flour'], ['Tepung Ayam Crispy', 'fried-chicken'], ['Tepung Kue', 'cake']] as [$title, $img])
      <div class="bg-white rounded-xl overflow-hidden shadow-lg text-red-900 transform hover:scale-105 transition duration-300">
        <img src="https://source.unsplash.com/400x250/?{{ $img }}" alt="{{ $title }}" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-xl font-bold">{{ $title }}</h3>
          <p class="text-sm mt-2">Racikan sempurna untuk hasil masakan terbaik.</p>
          <span class="block mt-3 text-red-700 font-semibold">Rp {{ rand(12000, 15000) }}</span>
        </div>
      </div>
    @endforeach
  </div>
</section>
@endsection
