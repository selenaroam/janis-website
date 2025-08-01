@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
<div class="max-w-3xl mx-auto space-y-6 text-center animate__animated animate__fadeIn">
  <h2 class="text-4xl font-bold text-yellow-400">Hubungi Kami</h2>
  <p class="text-white">Ada pertanyaan? Ingin bekerja sama? Kirim pesan langsung ke WhatsApp kami.</p>

  <a href="https://wa.me/6283853517769" target="_blank"
     class="inline-block bg-green-500 text-white px-6 py-3 rounded-full text-lg font-semibold hover:bg-green-600 transition">
    Kirim WhatsApp
  </a>

  <div class="mt-10">
    <p>📍 Alamat: Jl. Tepung Enak No. 123, Bandung</p>
    <p>✉️ Email: info@janisflour.id</p>
    <p>📞 Telp: 083-8535-17769</p>
  </div>
</div>
@endsection
