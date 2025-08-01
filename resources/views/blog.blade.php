@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="max-w-5xl mx-auto">
  <h2 class="text-4xl font-bold mb-8 text-center animate__animated animate__fadeInDown">Blog</h2>

  <div class="space-y-8">
    @foreach ([1,2,3] as $blog)
    <div class="bg-white p-6 rounded-lg shadow-md text-red-900">
      <h3 class="text-2xl font-bold mb-2">Judul Artikel {{ $blog }}</h3>
      <p class="text-sm text-gray-600 mb-4">Dipublikasikan: {{ now()->subDays($blog)->format('d M Y') }}</p>
      <p>Artikel ini membahas tips, inspirasi, atau resep menarik dengan menggunakan tepung Janis.</p>
      <a href="#" class="inline-block mt-3 text-red-700 font-semibold hover:underline">Baca Selengkapnya →</a>
    </div>
    @endforeach
  </div>
</div>
@endsection
