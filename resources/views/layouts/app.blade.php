<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') - Janis</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>
<body class="bg-gradient-to-b from-red-950 via-red-800 to-red-700 text-white font-sans">

  <header class="sticky top-0 z-50 bg-red-900/90 backdrop-blur-md shadow-md">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
      <h1 class="text-3xl font-bold text-yellow-300">JANIS</h1>

        <nav class="space-x-6 text-white font-medium">
  <a href="/" class="hover:text-yellow-400 transition">Beranda</a>
  <a href="/produk" class="hover:text-yellow-400 transition">Produk</a>
  <a href="/tentang" class="hover:text-yellow-400 transition">Tentang</a>
  <a href="/layanan" class="hover:text-yellow-400 transition">Layanan</a>
  <a href="/kontak" class="hover:text-yellow-400 transition">Kontak</a>
  <a href="/galeri" class="hover:text-yellow-400 transition">Galeri</a>
<a href="/faq" class="hover:text-yellow-400 transition">FAQ</a>
<a href="/blog" class="hover:text-yellow-400 transition">Blog</a>

</nav>

      </nav>
    </div>
  </header>

  <main class="min-h-screen pt-12">
    @yield('content')
  </main>

  <footer class="bg-red-900 text-center py-6 text-sm text-yellow-200 mt-16">
    &copy; {{ date('Y') }} <strong>Janis</strong>. Powered by Laravel & Tailwind CSS.
  </footer>
<a href="https://wa.me/6283853517769" target="_blank"
   class="fixed bottom-6 right-6 bg-green-500 hover:bg-green-600 text-white p-3 rounded-full shadow-lg animate__animated animate__bounceIn"
   title="Hubungi via WhatsApp">
   <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
        viewBox="0 0 24 24" stroke="currentColor">
     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
           d="M16 8c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h2l4 4V8z"/>
   </svg>
</a>


</body>
</html>
