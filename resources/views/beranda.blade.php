@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<section class="text-center py-24 px-6 animate__animated animate__fadeIn">
  <h2 class="text-5xl font-extrabold text-yellow-300 leading-tight mb-6 tracking-wide">
    Tepung Janis Premium
  </h2>
  <p class="text-lg text-yellow-100 max-w-2xl mx-auto mb-8">
    Bikin kue, gorengan, atau roti jadi lebih lembut, enak, dan sehat. 100% alami. Tanpa pengawet.
  </p>
  <a href="/checkout" class="bg-yellow-400 hover:bg-yellow-300 text-red-900 px-8 py-3 rounded-full text-lg font-bold shadow-lg transition">
    Pesan Sekarang
  </a>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto my-20 px-4 animate__animated animate__fadeInUp">
  <div class="bg-white/10 p-6 rounded-xl shadow-lg backdrop-blur-md transition hover:scale-105 duration-300">
    <img src="https://source.unsplash.com/300x200/?flour" class="rounded mb-4 mx-auto" alt="Premium Flour">
    <h3 class="text-xl font-semibold text-yellow-200 mb-2">Bahan Berkualitas</h3>
    <p class="text-sm text-yellow-100">Diproses dari gandum pilihan & dikemas higienis.</p>
  </div>
  <div class="bg-white/10 p-6 rounded-xl shadow-lg backdrop-blur-md transition hover:scale-105 duration-300">
    <img src="https://source.unsplash.com/300x200/?baking" class="rounded mb-4 mx-auto" alt="Baking Friendly">
    <h3 class="text-xl font-semibold text-yellow-200 mb-2">Serbaguna</h3>
    <p class="text-sm text-yellow-100">Cocok untuk roti, kue, gorengan, donat, pizza, dll.</p>
  </div>
  <div class="bg-white/10 p-6 rounded-xl shadow-lg backdrop-blur-md transition hover:scale-105 duration-300">
    <img src="https://source.unsplash.com/300x200/?homemade" class="rounded mb-4 mx-auto" alt="Homemade Support">
    <h3 class="text-xl font-semibold text-yellow-200 mb-2">Dukung UMKM</h3>
    <p class="text-sm text-yellow-100">Harga terjangkau, kualitas tidak murahan.</p>
  </div>
</section>

<section class="bg-red-950/90 py-16 px-6 text-center animate__animated animate__fadeInUp">
  <h2 class="text-3xl font-bold text-yellow-300 mb-4">Testimoni Pembeli</h2>
  <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ([
      ['nama' => 'Lia, Surabaya', 'pesan' => 'Adonan jadi lembut, pas buat usaha donatku!'],
      ['nama' => 'Rina, Bandung', 'pesan' => 'Anakku suka banget bolu buatan mamanya 😍'],
      ['nama' => 'Pak Wawan, Medan', 'pesan' => 'Packing rapi, kirim cepat. Mantap!']
    ] as $t)
      <div class="bg-white/10 p-4 rounded-lg border border-yellow-400 shadow-lg">
        <p class="italic text-yellow-100">"{{ $t['pesan'] }}"</p>
        <h4 class="mt-2 font-semibold text-yellow-300">{{ $t['nama'] }}</h4>
      </div>
    @endforeach
  </div>
</section>

<section class="py-20 px-6 text-center animate__animated animate__fadeInUp">
  <h2 class="text-3xl font-bold text-yellow-300 mb-6">Siap Coba Tepung Janis?</h2>
  <a href="/checkout" class="bg-yellow-500 hover:bg-yellow-400 text-red-900 px-10 py-4 rounded-full text-lg font-bold shadow-lg transition">
    Beli Sekarang
  </a>
</section>
@endsection
