@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')
<div class="max-w-6xl mx-auto space-y-12 animate__animated animate__fadeInUp">
  <h2 class="text-4xl font-bold text-center text-yellow-400">Layanan Kami</h2>

  <div class="grid md:grid-cols-3 gap-8 text-center">
    <div class="bg-white/10 p-6 rounded-xl shadow hover:scale-105 transition">
      <h3 class="text-xl font-semibold text-yellow-300">Pengiriman Cepat</h3>
      <p>Proses pengiriman cepat dan aman ke seluruh Indonesia.</p>
    </div>
    <div class="bg-white/10 p-6 rounded-xl shadow hover:scale-105 transition">
      <h3 class="text-xl font-semibold text-yellow-300">Kualitas Terjamin</h3>
      <p>Produk kami telah lolos uji mutu dan terdaftar resmi.</p>
    </div>
    <div class="bg-white/10 p-6 rounded-xl shadow hover:scale-105 transition">
      <h3 class="text-xl font-semibold text-yellow-300">Layanan Konsultasi</h3>
      <p>Konsultasikan kebutuhan usahamu dengan tim kami.</p>
    </div>
  </div>
</div>
@endsection
