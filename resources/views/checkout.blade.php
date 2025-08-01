@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="max-w-2xl mx-auto space-y-6 animate__animated animate__fadeInDown">
  <h2 class="text-3xl font-bold text-yellow-400 text-center">Form Pemesanan</h2>

  <form id="orderForm" class="space-y-4 bg-white/10 p-6 rounded-xl shadow">
    <input type="text" name="nama" placeholder="Nama Kamu" required
           class="w-full px-4 py-2 rounded-md bg-white/20 text-white placeholder-white/80 focus:outline-none">
    <input type="text" name="produk" placeholder="Produk (misal: Tepung Terigu 1kg)" required
           class="w-full px-4 py-2 rounded-md bg-white/20 text-white placeholder-white/80 focus:outline-none">
    <input type="number" name="jumlah" placeholder="Jumlah (kg)" required
           class="w-full px-4 py-2 rounded-md bg-white/20 text-white placeholder-white/80 focus:outline-none">
    <input type="text" name="alamat" placeholder="Alamat Lengkap" required
           class="w-full px-4 py-2 rounded-md bg-white/20 text-white placeholder-white/80 focus:outline-none">
    <input type="text" name="telepon" placeholder="No. WhatsApp Kamu" required
           class="w-full px-4 py-2 rounded-md bg-white/20 text-white placeholder-white/80 focus:outline-none">

    <button type="submit"
            class="w-full bg-green-500 hover:bg-green-600 transition px-4 py-2 font-bold text-white rounded-md">
      Kirim Pesanan via WhatsApp
    </button>
  </form>
</div>

<script>
  document.getElementById('orderForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const data = new FormData(this);
    const nama = data.get('nama');
    const produk = data.get('produk');
    const jumlah = data.get('jumlah');
    const alamat = data.get('alamat');
    const telepon = data.get('telepon');

    const pesan = `Halo Admin Janis 👋%0ASaya ingin memesan:%0A- Nama: ${nama}%0A- Produk: ${produk}%0A- Jumlah: ${jumlah} kg%0A- Alamat: ${alamat}%0A- WA: ${telepon}`;
    const url = `https://wa.me/6283853517769?text=${pesan}`;

    window.open(url, '_blank');
  });
</script>
@endsection
