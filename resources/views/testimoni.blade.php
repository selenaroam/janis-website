@extends('layouts.app')

@section('title', 'Testimoni')

@section('content')
<section class="max-w-6xl mx-auto text-center space-y-10 animate__animated animate__fadeInUp">
  <h2 class="text-4xl font-bold text-yellow-300">Apa Kata Mereka</h2>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @foreach ([
      ['nama' => 'Ibu Riyani', 'pesan' => 'Tepungnya lembut banget, bikin kue jadi enak dan ngembang.'],
      ['nama' => 'Pak Riyanto', 'pesan' => 'Sudah langganan buat usaha roti. Terpercaya dan berkualitas.'],
      ['nama' => 'Mbak Rani', 'pesan' => 'Pengiriman cepat, packing rapi. Cocok buat baking rumahan.']
    ] as $t)
      <div class="bg-white/10 p-6 rounded-lg shadow-md backdrop-blur-md">
        <p class="italic text-yellow-100">"{{ $t['pesan'] }}"</p>
        <h4 class="mt-4 font-semibold text-yellow-300">{{ $t['nama'] }}</h4>
      </div>
    @endforeach
  </div>
</section>
@endsection
