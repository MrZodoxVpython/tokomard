<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Judul dan Deskripsi -->
  <title>Tokomard Indonesia | Situs Jual Beli Dunia</title>
  <meta name="description" content="Belanja online mudah & murah di TokoMard. Nikmati diskon besar dan pengiriman cepat!">

  <!-- Open Graph untuk Facebook, WhatsApp, Telegram -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="TokoMard - Belanja Online Terpercaya">
  <meta property="og:description" content="Belanja online mudah & murah di TokoMard. Nikmati diskon besar dan pengiriman cepat!">
  <meta property="og:image" content="https://i.imgur.com/q3DzxiB.png">
  <meta property="og:url" content="https://tokomard.store/">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="TokoMard - Belanja Online Terpercaya">
  <meta name="twitter:description" content="Belanja online mudah & murah di TokoMard. Nikmati diskon besar dan pengiriman cepat!">
  <meta name="twitter:image" content="https://i.imgur.com/q3DzxiB.png">
  <meta name="twitter:url" content="https://tokomard.store/">

  <!-- Favicon -->
  <link rel="icon" href="https://i.imgur.com/q3DzxiB.png">

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Header -->
  <header class="bg-orange-500 text-white">
    <div class="max-w-7xl mx-auto px-4 py-2 flex justify-between items-center text-sm">
      <div class="flex gap-2">
        <a href="#">Seller Centre</a>
        <span>|</span>
        <a href="#">Download</a>
        <span>|</span>
        <a href="#">Ikuti kami di</a>
        <div class="flex gap-1">
          <img src="https://img.icons8.com/ios-filled/20/ffffff/facebook--v1.png" alt="">
          <img src="https://img.icons8.com/ios-filled/20/ffffff/instagram-new.png" alt="">
        </div>
      </div>
      <div class="flex gap-4">
        <a href="#">Notifikasi</a>
        <a href="#">Bantuan</a>
        <a href="#">Bahasa Indonesia</a>
        <a href="#">benjamin</a>
      </div>
    </div>

    <!-- Logo dan Search -->
    <div class="flex items-center justify-between -px-18 py-6 max-w-7xl mx-auto">
    <a href="https://i.imgur.com/q3DzxiB.png"></a>
      <div class="text-2xl font-bold text-white">Tokomard</div>
      <input type="text" placeholder="Search di Tokomard..." class="w-2/3 px-4 py-2 rounded">
      <div class="relative">
        <img src="https://cdn-icons-png.flaticon.com/512/263/263142.png" class="w-8 h-8" alt="cart">
        <span class="absolute -top-2 -right-2 bg-red-600 text-xs px-1 rounded-full">83</span>
      </div>
    </div>
  </header>

<!-- Banner -->
<div class="bg-white py-4">
  <div class="max-w-7xl mx-auto px-4 grid grid-cols-3 gap-1.5 h-[250px]">
    
    <!-- Carousel Banner Kiri -->
    <div class="relative col-span-2 h-full overflow-hidden">
      <div id="carousel" class="h-full w-full relative">
        <img src="https://cf.shopee.co.id/file/id-11134258-7ra0j-mbes592yn87z81_xxhdpi"
             class="carousel-img absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-100">
        <img src="https://cf.shopee.co.id/file/id-11134258-7rbk7-m71zp300x3zwda_xhdpi"
             class="carousel-img absolute inset-0 w-full h-full object-cover transition-opacity duration-700 opacity-0">
      </div>
      
      <!-- Tombol panah -->
      <button id="prevBtn" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-30 text-white px-2 py-1 rounded-full hidden">&#10094;</button>
      <button id="nextBtn" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-30 text-white px-2 py-1 rounded-full hidden">&#10095;</button>
    </div>

    <!-- Banner Kanan -->
    <div class="flex flex-col gap-1.5 h-full">
      <img src="https://cf.shopee.co.id/file/id-11134258-7rbk7-masco4vng1w296_xhdpi" 
           class="w-full h-1/2 object-cover" alt="promo kanan 1">
      <img src="https://cf.shopee.co.id/file/id-11134258-7rbk7-m71zp300x3zwda_xhdpi" 
           class="w-full h-1/2 object-cover" alt="promo kanan 2">
    </div>
  </div>
</div>

  <!-- Menu Bar -->
<div class="bg-white">
  <div class="max-w-7xl mx-auto grid grid-cols-6 gap-4 text-center py-6 px-4">
    <div>
      <img src="https://cf.shopee.co.id/file/icon_store.png" class="mx-auto w-10" alt="">
      <p class="text-sm mt-2">Tokomard Pilih Lokal</p>
    </div>
    <div>
      <img src="https://cf.shopee.co.id/file/icon_mall.png" class="mx-auto w-10" alt="">
      <p class="text-sm mt-2">Tokomard Mall</p>
    </div>
    <div>
      <img src="https://cf.shopee.co.id/file/icon_pulsa.png" class="mx-auto w-10" alt="">
      <p class="text-sm mt-2">Pulsa & Tagihan</p>
    </div>
    <div>
      <img src="https://cf.shopee.co.id/file/icon_flash.png" class="mx-auto w-10" alt="">
      <p class="text-sm mt-2">Flash Sale</p>
    </div>
    <div>
      <img src="https://cf.shopee.co.id/file/icon_voucher.png" class="mx-auto w-10" alt="">
      <p class="text-sm mt-2">Voucher & Diskon</p>
    </div>
    <div>
      <img src="https://cf.shopee.co.id/file/icon_promo.png" class="mx-auto w-10" alt="">
      <p class="text-sm mt-2">Semua Promo</p>
    </div>
  </div>
</div>

  <!-- Kategori -->
  <div class="bg-white py-5 my-5">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-lg font-bold mb-4">KATEGORI</h2>
      <div class="grid grid-cols-6 gap-6 text-center">
        <div>
          <img src="https://cf.shopee.co.id/file/icon_elektronik.png" class="mx-auto w-12" alt="">
          <p class="mt-2 text-sm">Elektronik</p>
        </div>
        <div>
          <img src="https://cf.shopee.co.id/file/icon_hp.png" class="mx-auto w-12" alt="">
          <p class="mt-2 text-sm">Handphone</p>
        </div>
        <div>
          <img src="https://cf.shopee.co.id/file/icon_pakaian.png" class="mx-auto w-12" alt="">
          <p class="mt-2 text-sm">Pakaian</p>
        </div>
        <div>
          <img src="https://cf.shopee.co.id/file/icon_sepatu.png" class="mx-auto w-12" alt="">
          <p class="mt-2 text-sm">Sepatu</p>
        </div>
        <div>
          <img src="https://cf.shopee.co.id/file/icon_kesehatan.png" class="mx-auto w-12" alt="">
          <p class="mt-2 text-sm">Kesehatan</p>
        </div>
        <div>
          <img src="https://cf.shopee.co.id/file/icon_otomotif.png" class="mx-auto w-12" alt="">
          <p class="mt-2 text-sm">Otomotif</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Chat -->
  <div class="fixed bottom-4 right-4 z-50">
    <button class="bg-orange-500 text-white px-4 py-2 rounded-full shadow-lg">
      Chat
    </button>
  </div>
<script>
  const slides = document.querySelectorAll('.carousel-img');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  let current = 0;
  let autoScroll;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.opacity = i === index ? '1' : '0';
    });
  }

  function nextSlide() {
    current = (current + 1) % slides.length;
    showSlide(current);
  }

  function prevSlide() {
    current = (current - 1 + slides.length) % slides.length;
    showSlide(current);
  }

  function startAutoSlide() {
    if (slides.length > 1) {
      autoScroll = setInterval(nextSlide, 5000);
      nextBtn.classList.remove('hidden');
      prevBtn.classList.remove('hidden');
    }
  }

  function stopAutoSlide() {
    clearInterval(autoScroll);
  }

  // Inisialisasi
  showSlide(current);
  startAutoSlide();

  nextBtn.addEventListener('click', () => {
    stopAutoSlide();
    nextSlide();
    startAutoSlide();
  });

  prevBtn.addEventListener('click', () => {
    stopAutoSlide();
    prevSlide();
    startAutoSlide();
  });
</script>
</body>
</html>

