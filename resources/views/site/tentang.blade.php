@verbatim
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">




<meta name="theme-color" content="#e42029">
<!-- Open Graph / Twitter -->









<link rel="icon" href="/assets/img/logo-icon.png" sizes="48x48">
<link rel="apple-touch-icon" href="/assets/img/logo.png">
<!-- Font: Fraunces (display) + Plus Jakarta Sans (body) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Font dimuat non-blocking (print→all). Di Tahap 2: self-host via Vite + preload woff2 -->
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght,SOFT@0,9..144,400..600,30;1,9..144,400,30&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
<noscript><link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght,SOFT@0,9..144,400..600,30;1,9..144,400,30&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"></noscript>
<link rel="stylesheet" href="/dist/style.css">
<style>[x-cloak]{display:none!important}</style>
<!-- main.js harus sebelum Alpine agar Alpine.data() terdaftar saat alpine:init -->
<script defer src="/js/main.js"></script>
<script defer src="/js/collapse.min.js"></script>
<script defer src="/js/alpine.min.js"></script>


@endverbatim
@include('site.seo')
@verbatim
<link rel="stylesheet" href="/css/editorial.css">
</head>
<body class="overflow-x-hidden">
<a href="#konten" class="sr-only focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-[100] focus:rounded-full focus:bg-ink focus:px-4 focus:py-2 focus:text-paper">Lewati ke konten</a>
<header x-data="navbar" :class="scrolled || open ? 'bg-paper/90 backdrop-blur-md shadow-[0_1px_0_0_rgb(30_30_30/0.06)]' : 'bg-transparent'" class="fixed inset-x-0 top-0 z-50 transition-all duration-300">
  <nav class="container-x flex h-[72px] items-center justify-between gap-6" aria-label="Navigasi utama">
    <a aria-label='Villa Merah — beranda' class='flex items-center gap-3' href='/'>
      <img src="/assets/img/logo.png" alt="" width="40" height="40" class="h-10 w-10">
      <span class="font-display text-xl leading-none tracking-tight">Villa <span class="text-brand-700">Merah</span></span>
    </a>

    <ul class="hidden items-center gap-1 lg:flex">
      <li class="group relative">
        <a aria-haspopup='true' class='btn-ghost px-4 py-2' href='/program-index'>Program
          <svg class="h-4 w-4 opacity-60 transition group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
        </a>
        <!-- Mega menu -->
        <div class="invisible absolute left-1/2 top-full w-[720px] -translate-x-1/2 pt-3 opacity-0 transition-all duration-200 group-hover:visible group-hover:opacity-100 group-focus-within:visible group-focus-within:opacity-100">
          <div class="card grid grid-cols-3 gap-6 p-6">
            <div>
              <p class="eyebrow mb-3">Seni Rupa &amp; Desain</p>
              <ul class="space-y-2 text-sm">
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Intensif SNBP</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Intensif SNBT</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Intensif Seleksi Mandiri</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Intensif Online</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Blended Learning</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Online Learning</a></li>
              </ul>
            </div>
            <div>
              <p class="eyebrow mb-3">Arsitektur</p>
              <ul class="space-y-2 text-sm">
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Intensif Arsitektur</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Intensif Online Arsitektur</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Blended Learning Arsitektur</a></li>
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Online Learning Arsitektur</a></li>
              </ul>
              <p class="eyebrow mb-3 mt-6">SD &amp; SMP</p>
              <ul class="space-y-2 text-sm">
                <li><a class='block rounded-lg px-2 py-1.5 hover:bg-paper-2' href='/program'>Program SD &amp; SMP</a></li>
              </ul>
            </div>
            <a class='group/cta relative overflow-hidden rounded-xl bg-ink p-5 text-paper' href='/program-index'>
              <img src="/assets/img/karya-4.webp" srcset="assets/img/karya-4-sm.webp 320w, assets/img/karya-4.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="" class="absolute inset-0 h-full w-full object-cover opacity-40 transition group-hover/cta:scale-105 group-hover/cta:opacity-50" loading="lazy" width="500" height="400">
              <div class="relative flex h-full flex-col justify-end">
                <p class="font-display text-lg leading-tight">Bingung pilih program?</p>
                <p class="mt-1 text-xs text-paper/70">Bandingkan semua program &rarr;</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li><a class='btn-ghost px-4 py-2' href='/galeri'>Galeri</a></li>
      <li><a class='btn-ghost px-4 py-2' href='/blog'>Blog</a></li>
      <li><a class='btn-ghost px-4 py-2' href='/tentang'>Tentang</a></li>
      <li><a class='btn-ghost px-4 py-2' href='/tentang#faq'>FAQ</a></li>
    </ul>

    <div class="hidden items-center gap-2 lg:flex">
      <a href="https://wa.me/6285720070066?text=Halo%20Villa%20Merah%2C%20saya%20ingin%20konsultasi%20program%20bimbel." target="_blank" rel="noopener" class="btn-ghost px-4 py-2" aria-label="Chat WhatsApp">
        <svg class="h-5 w-5 text-[#25D366]" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.4-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5l-.9-2.2c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4zM12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2c-1.5 0-3-.4-4.3-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
        085720070066
      </a>
      <a class='btn-primary' href='/daftar'>Daftar Sekarang</a>
    </div>

    <button @click="open = !open" class="-mr-2 inline-flex h-11 w-11 items-center justify-center rounded-full lg:hidden" :aria-expanded="open" aria-controls="menu-mobile" aria-label="Buka menu">
      <svg x-show="!open" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/></svg>
      <svg x-show="open" x-cloak class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" d="M6 18 18 6M6 6l12 12"/></svg>
    </button>
  </nav>

  <!-- Menu mobile -->
  <div id="menu-mobile" x-show="open" x-cloak x-transition.opacity class="fixed inset-0 top-[72px] z-40 overflow-y-auto bg-paper lg:hidden">
    <div class="container-x flex min-h-full flex-col py-6">
      <div x-data="{ prog: true }" class="border-b border-line pb-4">
        <button @click="prog = !prog" class="flex w-full items-center justify-between py-3 text-left font-display text-2xl">Program
          <svg class="h-5 w-5 transition" :class="prog && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/></svg>
        </button>
        <div x-show="prog" x-collapse class="grid gap-6 pt-2 sm:grid-cols-2">
          <div><p class="eyebrow mb-2">Seni Rupa &amp; Desain</p>
            <ul class="space-y-1 text-ink-2"><li><a class='block py-1.5' href='/program'>Intensif SNBP</a></li><li><a class='block py-1.5' href='/program'>Intensif SNBT</a></li><li><a class='block py-1.5' href='/program'>Intensif Seleksi Mandiri</a></li><li><a class='block py-1.5' href='/program'>Intensif Online</a></li><li><a class='block py-1.5' href='/program'>Blended Learning</a></li><li><a class='block py-1.5' href='/program'>Online Learning</a></li></ul></div>
          <div><p class="eyebrow mb-2">Arsitektur</p>
            <ul class="space-y-1 text-ink-2"><li><a class='block py-1.5' href='/program'>Intensif Arsitektur</a></li><li><a class='block py-1.5' href='/program'>Intensif Online Arsitektur</a></li><li><a class='block py-1.5' href='/program'>Blended Learning Arsitektur</a></li><li><a class='block py-1.5' href='/program'>Online Learning Arsitektur</a></li></ul>
            <p class="eyebrow mb-2 mt-4">SD &amp; SMP</p>
            <ul class="space-y-1 text-ink-2"><li><a class='block py-1.5' href='/program'>Program SD &amp; SMP</a></li></ul></div>
        </div>
      </div>
      <a class='border-b border-line py-4 font-display text-2xl' href='/galeri'>Galeri</a>
      <a class='border-b border-line py-4 font-display text-2xl' href='/blog'>Blog</a>
      <a class='border-b border-line py-4 font-display text-2xl' href='/tentang'>Tentang</a>
      <a class='border-b border-line py-4 font-display text-2xl' href='/tentang#faq'>FAQ</a>
      <div class="mt-auto grid gap-3 pt-8">
        <a class='btn-primary btn-lg' href='/daftar'>Daftar Sekarang</a>
        <a href="https://wa.me/6285720070066" target="_blank" rel="noopener" class="btn-wa btn-lg">Chat WhatsApp</a>
      </div>
    </div>
  </div>
</header>

<main id="konten" class="pt-[72px]">

  <!-- Hero -->
  <section class="bg-grid-paper">
    <div class="container-x grid items-center gap-12 py-14 lg:grid-cols-12 lg:py-20">
      <div class="lg:col-span-6">
        <nav aria-label="Breadcrumb" class="text-xs text-ink-4"><ol class="flex gap-2"><li><a class='hover:text-ink' href='/'>Beranda</a></li><li aria-hidden="true">/</li><li aria-current="page" class="text-ink">Tentang</li></ol></nav>
        <p class="eyebrow mt-6">Tentang Villa Merah</p>
        <h1 class="h-display mt-4 text-balance">@endverbatim
@if(filled($pageContent?->heading)){{ $pageContent->heading }}@else
@verbatimRumah tempat generasi seniman &amp; arsitek bermula.@endverbatim
@endif
@verbatim</h1>
        <p class="lead mt-5 text-pretty">@endverbatim
@if(filled($pageContent?->intro)){{ $pageContent->intro }}@else
@verbatimVilla Merah dibangun tahun 1922 oleh arsitek Belanda R.L.A. Schoemaker sebagai rumah dinas guru besar ITB, lalu menjadi asrama mahasiswa. Dari rumah inilah bimbingan belajar Seni Rupa Desain ITB dan Arsitektur bermula — dan masih berjalan hingga hari ini.@endverbatim
@endif
@verbatim</p>
      </div>
      <div class="relative lg:col-span-6">
        <div class="frame -rotate-1"><img src="/assets/img/villa-1922.webp" srcset="assets/img/villa-1922-sm.webp 320w, assets/img/villa-1922.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="Bangunan Villa Merah, Jl. Anggrek No. 49 Bandung" width="400" height="400" class="aspect-[5/4] grayscale" fetchpriority="high"></div>
        <div class="frame absolute -bottom-8 -left-4 w-[45%] rotate-3 sm:left-4"><img src="/assets/img/villa-2.webp" srcset="assets/img/villa-2-sm.webp 320w, assets/img/villa-2.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="Suasana studio Villa Merah" width="400" height="301" loading="lazy"></div>
      </div>
    </div>
  </section>

  <!-- Sub-nav -->
  <nav class="sticky top-[72px] z-30 border-b border-line bg-paper/90 backdrop-blur" aria-label="Bagian halaman">
    <div class="container-x flex gap-6 overflow-x-auto py-3 text-sm font-medium [scrollbar-width:none]">
      <a href="#sejarah" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Sejarah</a>
      <a href="#metode" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Metode</a>
      <a href="#pengajar" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Pengajar</a>
      <a href="#testimoni" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Testimoni</a>
      <a href="#faq" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">FAQ</a>
      <a href="#lokasi" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Lokasi</a>
    </div>
  </nav>

  <!-- Sejarah: timeline -->
  <section id="sejarah" class="scroll-mt-32 py-20 lg:py-28" aria-labelledby="sejarah-heading">
    <div class="container-x grid gap-12 lg:grid-cols-12">
      <div class="lg:col-span-4"><p class="eyebrow">Sejarah</p><h2 id="sejarah-heading" class="h-section mt-3">Seabad lebih di Jl. Anggrek 49.</h2></div>
      <ol class="relative space-y-10 border-l border-line pl-8 lg:col-span-8">
        <li class="relative"><span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-brand-600 ring-4 ring-paper"></span><p class="font-display text-3xl">1922</p><p class="mt-2 text-ink-3">Dibangun oleh arsitek R.L.A. Schoemaker sebagai rumah dinas guru besar Technische Hoogeschool (kini ITB). Warna merah bata-nya melahirkan nama “Villa Merah”.</p></li>
        <li class="relative"><span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-ink ring-4 ring-paper"></span><p class="font-display text-3xl">Asrama ITB</p><p class="mt-2 text-ink-3">Menjadi asrama mahasiswa ITB. Di antara penghuninya: <strong class="text-ink">Prof. Muhtar Apin</strong> (Guru Besar Seni Rupa ITB) dan <strong class="text-ink">Prof. Hasan Purbo</strong> (Guru Besar Arsitektur ITB).</p></li>
        <li class="relative"><span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-ink ring-4 ring-paper"></span><p class="font-display text-3xl">1992</p><p class="mt-2 text-ink-3">Bimbingan belajar Seni Rupa Desain ITB &amp; Arsitektur berjalan di Villa Merah. Pidi Baiq — penulis dan sutradara <em>Dilan</em> — termasuk pengajar sejak masa ini. <span class="text-ink-4">(TODO: konfirmasi tahun pendirian resmi)</span></p></li>
        <li class="relative"><span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-ink ring-4 ring-paper"></span><p class="font-display text-3xl">Jakarta</p><p class="mt-2 text-ink-3">Membuka cabang di Kebayoran Baru (Jakarta Selatan) dan Cempaka Putih (Jakarta Pusat).</p></li>
        <li class="relative"><span class="absolute -left-[41px] top-1 flex h-5 w-5 items-center justify-center rounded-full bg-ochre-500 ring-4 ring-paper"></span><p class="font-display text-3xl">Hari ini</p><p class="mt-2 text-ink-3">Kelas offline di 3 studio, kelas online ke seluruh Indonesia, dan ribuan alumni di FSRD ITB, Arsitektur, ISI, UNPAD, UNPAR, dan kampus lainnya.</p></li>
      </ol>
    </div>
  </section>

  <!-- Metode -->
  <section id="metode" class="scroll-mt-32 bg-ink py-20 text-paper lg:py-28" aria-labelledby="metode-heading">
    <div class="container-x">
      <div class="max-w-2xl"><p class="eyebrow text-brand-400">Metode</p><h2 id="metode-heading" class="h-section mt-3 text-paper">Dibimbing sampai bisa — bukan sekadar diajari.</h2><p class="mt-4 text-paper/60">Villa Merah mengembangkan minat dan bakat siswa: menajamkan dasar menggambar, gambar aplikasi lanjutan, gambar naratif, komposisi, karya bebas, skolastik, kecerdasan spasial — luwes bertindak, kreatif berkarya.</p></div>
      <div class="mt-12 grid gap-px overflow-hidden rounded-2xl bg-paper/10 sm:grid-cols-2 lg:grid-cols-4">
        <div class="bg-ink p-7"><p class="font-display text-4xl text-brand-400">01</p><h3 class="mt-4 font-semibold">Diagnosa awal</h3><p class="mt-2 text-sm text-paper/60">Tes gambar dan wawancara untuk memetakan level dan tujuan kampus.</p></div>
        <div class="bg-ink p-7"><p class="font-display text-4xl text-brand-400">02</p><h3 class="mt-4 font-semibold">Latihan terstruktur</h3><p class="mt-2 text-sm text-paper/60">Modul bertahap dari dasar hingga karya portofolio, dengan target mingguan.</p></div>
        <div class="bg-ink p-7"><p class="font-display text-4xl text-brand-400">03</p><h3 class="mt-4 font-semibold">Review personal</h3><p class="mt-2 text-sm text-paper/60">Setiap karya dikoreksi langsung oleh pengajar — offline maupun lewat video.</p></div>
        <div class="bg-ink p-7"><p class="font-display text-4xl text-brand-400">04</p><h3 class="mt-4 font-semibold">Simulasi &amp; kurasi</h3><p class="mt-2 text-sm text-paper/60">Try out, simulasi ujian gambar, dan kurasi portofolio akhir bersama VIP guidance.</p></div>
      </div>
    </div>
  </section>

  <!-- Pengajar -->
  <section id="pengajar" class="scroll-mt-32 py-20 lg:py-28" aria-labelledby="pengajar-heading">
    <div class="container-x">
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between"><div><p class="eyebrow">Pengajar</p><h2 id="pengajar-heading" class="h-section mt-3">Belajar dari yang sudah melewatinya.</h2></div><p class="max-w-sm text-sm text-ink-3">Seluruh pengajar adalah alumni FSRD/Arsitektur ITB dan praktisi aktif. <span class="text-ink-4">(TODO: data pengajar resmi)</span></p></div>
      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
        <div class="group"><div class="aspect-[4/5] overflow-hidden rounded-2xl bg-paper-3"><img src="/assets/img/kegiatan-talkshow.webp" srcset="assets/img/kegiatan-talkshow-sm.webp 320w, assets/img/kegiatan-talkshow.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="500" height="375" loading="lazy" class="h-full w-full object-cover grayscale transition duration-500 group-hover:grayscale-0"></div><p class="mt-4 font-display text-xl">Pidi Baiq</p><p class="text-sm text-ink-4">Pengajar sejak 1992 · penulis &amp; sutradara</p></div>
        <div class="group"><div class="aspect-[4/5] overflow-hidden rounded-2xl bg-paper-3"></div><p class="mt-4 font-display text-xl">Nama Pengajar</p><p class="text-sm text-ink-4">Alumni Seni Rupa ITB · pelukis</p></div>
        <div class="group"><div class="aspect-[4/5] overflow-hidden rounded-2xl bg-paper-3"></div><p class="mt-4 font-display text-xl">Nama Pengajar</p><p class="text-sm text-ink-4">Alumni Arsitektur ITB · arsitek</p></div>
        <div class="group"><div class="aspect-[4/5] overflow-hidden rounded-2xl bg-paper-3"></div><p class="mt-4 font-display text-xl">Nama Pengajar</p><p class="text-sm text-ink-4">Alumni DKV ITB · ilustrator</p></div>
      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section id="testimoni" class="scroll-mt-32 bg-paper-2 py-20 lg:py-28" aria-labelledby="testi-heading">
    <div class="container-x">
      <div class="max-w-2xl"><p class="eyebrow">Testimoni</p><h2 id="testi-heading" class="h-section mt-3">Kata alumni.</h2></div>
      <div class="mt-10 columns-1 gap-6 md:columns-2 lg:columns-3 [&>*]:mb-6 [&>*]:break-inside-avoid">
        <figure class="card p-7"><blockquote class="font-display text-lg leading-relaxed">“Ga nyesel masuk Villa Merah. Bener-bener dari yang males banget menggambar perspektif dan narasi jadi…”</blockquote><figcaption class="mt-5 flex items-center gap-3"><img src="/assets/img/testi-2.webp" srcset="assets/img/testi-2-sm.webp 320w, assets/img/testi-2.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-11 w-11 rounded-full object-cover"><div><p class="text-sm font-semibold">Atira Feodora Munthe</p><p class="text-xs text-ink-4">SMAK Penabur Kota Wisata</p></div></figcaption></figure>
        <figure class="card p-7"><blockquote class="font-display text-lg leading-relaxed">“Villa Merah tempat yang asik buat belajar gambar. Paling komplit fasilitasnya: ada workshop, jalambar…”</blockquote><figcaption class="mt-5 flex items-center gap-3"><img src="/assets/img/testi-1.webp" srcset="assets/img/testi-1-sm.webp 320w, assets/img/testi-1.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-11 w-11 rounded-full object-cover"><div><p class="text-sm font-semibold">Anvilia S.</p><p class="text-xs text-ink-4">SMAN 1 Balikpapan</p></div></figcaption></figure>
        <figure class="card p-7"><blockquote class="font-display text-lg leading-relaxed">“Kesan gw selama belajar di Villa Merah seru banget dan cara kakak-kakak pengajar di sini menyampaikan…”</blockquote><figcaption class="mt-5 flex items-center gap-3"><img src="/assets/img/testi-6.webp" srcset="assets/img/testi-6-sm.webp 320w, assets/img/testi-6.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-11 w-11 rounded-full object-cover"><div><p class="text-sm font-semibold">Syauqi</p><p class="text-xs text-ink-4">SMAN 7 Tangerang Selatan</p></div></figcaption></figure>
        <figure class="card p-7"><blockquote class="font-display text-lg leading-relaxed">“Pengajar keren-keren dan metode belajarnya asik, seru, serta menyenangkan. Kita diajarkan dari materi…”</blockquote><figcaption class="mt-5 flex items-center gap-3"><img src="/assets/img/testi-5.webp" srcset="assets/img/testi-5-sm.webp 320w, assets/img/testi-5.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-11 w-11 rounded-full object-cover"><div><p class="text-sm font-semibold">Awanis Putri</p><p class="text-xs text-ink-4">SMA Negeri 5 Bekasi</p></div></figcaption></figure>
        <figure class="card p-7"><blockquote class="font-display text-lg leading-relaxed">“Les di Villa Merah beneran asik dan hasilnya puas, kakaknya dengan sabar ngajarin dari yang bener-bener…”</blockquote><figcaption class="mt-5 flex items-center gap-3"><img src="/assets/img/testi-4.webp" srcset="assets/img/testi-4-sm.webp 320w, assets/img/testi-4.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-11 w-11 rounded-full object-cover"><div><p class="text-sm font-semibold">Madeline Natalie</p><p class="text-xs text-ink-4">SMAN 71 Jakarta</p></div></figcaption></figure>
        <figure class="card p-7"><blockquote class="font-display text-lg leading-relaxed">“Belajar di Villa Merah itu seru banget, temen-temen dan kakak pengajarnya asik. Diajarin dari konsep…”</blockquote><figcaption class="mt-5 flex items-center gap-3"><img src="/assets/img/testi-3.webp" srcset="assets/img/testi-3-sm.webp 320w, assets/img/testi-3.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-11 w-11 rounded-full object-cover"><div><p class="text-sm font-semibold">Sarasvati Sekar</p><p class="text-xs text-ink-4">SMA Negeri 1 Bogor</p></div></figcaption></figure>
      </div>
    </div>
  </section>

  <!-- FAQ lengkap -->
  <section id="faq" class="scroll-mt-32 py-20 lg:py-28" aria-labelledby="faq-heading">
    <div class="container-x grid gap-12 lg:grid-cols-12">
      <div class="lg:col-span-4">
        <div class="lg:sticky lg:top-32">
          <p class="eyebrow">FAQ</p><h2 id="faq-heading" class="h-section mt-3">Semua yang perlu kamu tahu.</h2>
          <ul class="mt-6 space-y-1 text-sm"><li><a href="#faq-umum" class="block rounded-lg px-3 py-2 hover:bg-paper-2">Umum</a></li><li><a href="#faq-snbp" class="block rounded-lg px-3 py-2 hover:bg-paper-2">SNBP</a></li><li><a href="#faq-snbt" class="block rounded-lg px-3 py-2 hover:bg-paper-2">SNBT</a></li><li><a href="#faq-seleksi-mandiri" class="block rounded-lg px-3 py-2 hover:bg-paper-2">Seleksi Mandiri</a></li></ul>
          <p class="mt-6 text-xs text-ink-4">Ketentuan seleksi mengacu pada aturan SNPMB terbaru. Cek selalu situs resmi SNPMB.</p>
          <a href="https://wa.me/6285720070066" target="_blank" rel="noopener" class="btn-wa mt-6">Tanya yang lain</a>
        </div>
      </div>
      <div class="space-y-12 lg:col-span-8">
        <div class="scroll-mt-28" id="faq-umum"><h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.2em] text-brand-700">Umum</h3><div class="divide-y divide-line">
          <details class="group py-4" open><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Saya tidak punya bakat menggambar, apakah bisa masuk FSRD atau Arsitektur?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Bisa. Dengan latihan berkelanjutan dan bimbingan pengajar berpengalaman, kemampuan menggambar dapat dikembangkan hingga cukup untuk lolos seleksi program-program tersebut.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apa yang harus disiapkan calon mahasiswa Arsitektur?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Meski jalur seleksi saat ini tidak mensyaratkan tes gambar atau portofolio, kemampuan sketsa tetap sangat dibutuhkan saat perkuliahan. Program Arsitektur kami membekali gambar teknik, perspektif, dan kecerdasan spasial.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apakah siswa jurusan IPA bisa ikut seleksi FSRD?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Bisa. Sejak aturan seleksi nasional terbaru tidak ada lagi pemisahan tes Saintek/Soshum, sehingga siswa IPA dapat memilih FSRD tanpa syarat lintas jurusan.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apakah Villa Merah juga mengajarkan Tes Potensi Skolastik?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Ya. Tersedia video tutorial dan kelas live untuk TPS sebagai pelengkap materi menggambar, termasuk simulasi try out.</p></details>
        </div></div>
        <div class="scroll-mt-28" id="faq-snbp"><h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.2em] text-brand-700">SNBP</h3><div class="divide-y divide-line">
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apa itu SNBP?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Seleksi Nasional Berdasarkan Prestasi (dulu SNMPTN). Penilaian berdasarkan prestasi akademik dan non-akademik; siswa dapat memilih prodi berdasarkan minat, tidak terikat jurusan SMA.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Siapa yang bisa ikut SNBP?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Siswa kelas XII dengan prestasi unggul, memiliki NISN, nilai rapor semester 1–5, dan mengunggah portofolio untuk prodi seni/olahraga.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apa itu siswa 'eligible'?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Siswa yang memenuhi kriteria sekolah berdasarkan rata-rata nilai seluruh mata pelajaran semester 1–5. Kuota eligible ditentukan oleh akreditasi sekolah.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apa saja jenis portofolio Seni Rupa?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Dua jenis: (1) Gambar Naratif — menampilkan hubungan manusia dan lingkungan dengan informasi konteks lengkap; (2) Karya Bebas/Karya Terbaik — potret, lukisan, gambar hewan, dengan berbagai media.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Berapa bobot portofolio dalam kelulusan SNBP?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Untuk program studi seni, portofolio berbobot 50% dan prestasi akademik 50%.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apakah indeks sekolah mempengaruhi penerimaan?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Ya, cukup signifikan. PTN mempertimbangkan rekam jejak pendaftar dan lulusan dari sekolah yang sama pada tahun-tahun sebelumnya.</p></details>
        </div></div>
        <div class="scroll-mt-28" id="faq-snbt"><h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.2em] text-brand-700">SNBT</h3><div class="divide-y divide-line">
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apa itu SNBT?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Seleksi Nasional Berdasarkan Tes (dulu SBMPTN), berupa UTBK berbasis komputer yang menguji Tes Potensi Skolastik, literasi, dan penalaran matematika — tanpa tes mata pelajaran.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Siapa yang bisa ikut SNBT?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Pemilik akun SNPMB, WNI, lulusan SMA/sederajat maksimal 3 tahun terakhir, usia di bawah 25 tahun, bukan peserta yang sudah lolos SNBP, dan mengunggah portofolio untuk prodi seni.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Saya sudah lulus SMA (gap year), masih bisa daftar SNBT?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Bisa, maksimal tiga tahun setelah kelulusan sesuai ketentuan SNPMB.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apakah PTN menetapkan passing grade UTBK?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Umumnya PTN tidak mengumumkan passing grade; batas lolos bergantung pada sebaran skor pendaftar tahun berjalan.</p></details>
        </div></div>
        <div class="scroll-mt-28" id="faq-seleksi-mandiri"><h3 class="mb-2 text-xs font-semibold uppercase tracking-[0.2em] text-brand-700">Seleksi Mandiri</h3><div class="divide-y divide-line">
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apa itu Seleksi Mandiri?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Sistem penerimaan mahasiswa baru yang diselenggarakan sendiri oleh masing-masing PTN setelah pengumuman SNBT, berdasarkan kriteria akademik yang ditetapkan kampus.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Apa syarat peserta Seleksi Mandiri?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">Setiap PTN menetapkan syaratnya sendiri. Beberapa (mis. ITB, UNPAR, ISI) masih mengujikan tes menggambar langsung — inilah fokus Program Intensif Seleksi Mandiri.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink [&::-webkit-details-marker]:hidden">Bagaimana pembagian kuota SNBP, SNBT, dan Mandiri?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary><p class="mt-3 max-w-2xl text-ink-3">SNBP minimal 20%, SNBT minimal 40% (PTN reguler) atau 30% (PTN-BH), Seleksi Mandiri maksimal 30% (PTN reguler) atau 50% (PTN-BH).</p></details>
        </div></div>
      </div>
    </div>
  </section>

  <!-- Lokasi -->
  <section id="lokasi" class="scroll-mt-32 bg-paper-2 py-20 lg:py-28" aria-labelledby="lokasi-heading">
    <div class="container-x">
      <div class="max-w-2xl"><p class="eyebrow">Lokasi</p><h2 id="lokasi-heading" class="h-section mt-3">Tiga studio, satu standar.</h2><p class="mt-3 text-ink-3">Layanan Senin–Minggu, 10.00–17.00 WIB.</p></div>
      <div class="mt-10 grid gap-5 md:grid-cols-3">
        <div class="card p-6"><span class="chip-brand">Pusat</span><h3 class="h-card mt-3">Bandung</h3><p class="mt-2 text-sm text-ink-3">Jl. Anggrek No. 49, Bandung</p><p class="mt-1 text-sm"><a href="tel:+62227102177" class="hover:text-brand-700">(022) 7102177</a> · <a href="tel:+6285720070066" class="hover:text-brand-700">0857-2007-0066</a></p><a href="https://maps.google.com/?q=Jl.+Anggrek+No.+49+Bandung" target="_blank" rel="noopener" class="btn-outline mt-4 px-4 py-2">Buka peta</a></div>
        <div class="card p-6"><span class="chip">Cabang</span><h3 class="h-card mt-3">Jakarta Selatan</h3><p class="mt-2 text-sm text-ink-3">Jl. Gandaria 1 No. 9A, Kebayoran Baru</p><p class="mt-1 text-sm"><a href="tel:+62217246725" class="hover:text-brand-700">(021) 7246725</a> · <a href="tel:+6287881723674" class="hover:text-brand-700">0878-8172-3674</a></p><a href="https://maps.google.com/?q=Jl.+Gandaria+1+No.+9A+Kebayoran+Baru" target="_blank" rel="noopener" class="btn-outline mt-4 px-4 py-2">Buka peta</a></div>
        <div class="card p-6"><span class="chip">Cabang</span><h3 class="h-card mt-3">Jakarta Pusat</h3><p class="mt-2 text-sm text-ink-3">Jl. Cemp. Putih Tengah I No. 35, Cempaka Putih</p><p class="mt-1 text-sm"><a href="tel:+622129621989" class="hover:text-brand-700">(021) 29621989</a> · <a href="tel:+6281311314446" class="hover:text-brand-700">0813-1131-4446</a></p><a href="https://maps.google.com/?q=Jl.+Cempaka+Putih+Tengah+I+No.35+Jakarta+Pusat" target="_blank" rel="noopener" class="btn-outline mt-4 px-4 py-2">Buka peta</a></div>
      </div>
      <!-- Embed peta: di Tahap 2 pakai iframe Google Maps per lokasi (lazy) -->
      <div class="mt-6 aspect-[21/9] w-full rounded-2xl bg-paper-3 ring-1 ring-line flex items-center justify-center text-sm text-ink-2">Placeholder embed Google Maps (Bandung)</div>
    </div>
  </section>
@endverbatim
@include('site.additional-content')
@verbatim
</main>
<footer class="relative mt-24 bg-ink text-paper">
  <div class="container-x py-16">
    <div class="grid gap-12 lg:grid-cols-12">
      <div class="lg:col-span-4">
        <a aria-label='Villa Merah' class='flex items-center gap-3' href='/'>
          <img src="/assets/img/logo.png" alt="" width="44" height="44" class="h-11 w-11" loading="lazy">
          <span class="font-display text-2xl">Villa <span class="text-brand-500">Merah</span></span>
        </a>
        <p class="mt-5 max-w-sm text-sm leading-relaxed text-paper/60">Bimbel gambar persiapan masuk Fakultas Seni Rupa &amp; Desain (FSRD) dan Arsitektur. Berdiri di bangunan bersejarah tahun 1922, Bandung.</p>
        <div class="mt-6 flex gap-2">
          <a href="https://instagram.com/bimbelgambar_villamerah" target="_blank" rel="noopener" class="flex h-10 w-10 items-center justify-center rounded-full bg-paper/10 transition hover:bg-brand-600" aria-label="Instagram"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.2c3.2 0 3.6 0 4.8.1 3.3.1 4.8 1.7 4.9 4.9.1 1.3.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 3.2-1.7 4.8-4.9 4.9-1.3.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-3.3-.1-4.8-1.7-4.9-4.9C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8C2.4 3.9 4 2.4 7.2 2.3c1.2-.1 1.6-.1 4.8-.1zM12 0C8.7 0 8.3 0 7.1.1 2.7.3.3 2.7.1 7.1 0 8.3 0 8.7 0 12s0 3.7.1 4.9c.2 4.4 2.6 6.8 7 7 1.2.1 1.6.1 4.9.1s3.7 0 4.9-.1c4.4-.2 6.8-2.6 7-7 .1-1.2.1-1.6.1-4.9s0-3.7-.1-4.9c-.2-4.4-2.6-6.8-7-7C15.7 0 15.3 0 12 0zm0 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm6.4-11.8a1.4 1.4 0 1 0 0 2.9 1.4 1.4 0 0 0 0-2.9z"/></svg></a>
          <a href="https://facebook.com/bimbel.villamerah" target="_blank" rel="noopener" class="flex h-10 w-10 items-center justify-center rounded-full bg-paper/10 transition hover:bg-brand-600" aria-label="Facebook"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12a12 12 0 1 0-13.9 11.9v-8.4H7.1V12h3V9.4c0-3 1.8-4.7 4.5-4.7 1.3 0 2.7.2 2.7.2v3h-1.5c-1.5 0-2 .9-2 1.9V12h3.3l-.5 3.5h-2.8v8.4A12 12 0 0 0 24 12z"/></svg></a>
          <a href="https://youtube.com/channel/UCCheW9-S6rzlSC8QUcnrMpA" target="_blank" rel="noopener" class="flex h-10 w-10 items-center justify-center rounded-full bg-paper/10 transition hover:bg-brand-600" aria-label="YouTube"><svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.5 6.2a3 3 0 0 0-2.1-2.1C19.5 3.6 12 3.6 12 3.6s-7.5 0-9.4.5A3 3 0 0 0 .5 6.2C0 8.1 0 12 0 12s0 3.9.5 5.8a3 3 0 0 0 2.1 2.1c1.9.5 9.4.5 9.4.5s7.5 0 9.4-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-5.8.5-5.8s0-3.9-.5-5.8zM9.6 15.6V8.4l6.2 3.6-6.2 3.6z"/></svg></a>
          <a href="https://twitter.com/vilmerbandung" target="_blank" rel="noopener" class="flex h-10 w-10 items-center justify-center rounded-full bg-paper/10 transition hover:bg-brand-600" aria-label="X / Twitter"><svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.9 1.2h3.7l-8 9.2L24 22.8h-7.4l-5.8-7.6-6.6 7.6H.5l8.6-9.8L0 1.2h7.6l5.2 6.9 6.1-6.9zm-1.3 19.4h2L6.5 3.2H4.3l13.3 17.4z"/></svg></a>
        </div>
      </div>

      <div class="grid gap-10 sm:grid-cols-3 lg:col-span-8">
        <div>
          <h3 class="font-sans text-xs font-semibold uppercase tracking-[0.2em] text-paper/50">Program</h3>
          <ul class="mt-4 space-y-2.5 text-sm text-paper/80">
            <li><a class='hover:text-white' href='/program'>Intensif SNBP</a></li>
            <li><a class='hover:text-white' href='/program'>Intensif SNBT</a></li>
            <li><a class='hover:text-white' href='/program'>Intensif Seleksi Mandiri</a></li>
            <li><a class='hover:text-white' href='/program'>Intensif Arsitektur</a></li>
            <li><a class='hover:text-white' href='/program'>Online &amp; Blended Learning</a></li>
            <li><a class='hover:text-white' href='/program'>Program SD &amp; SMP</a></li>
          </ul>
        </div>
        <div>
          <h3 class="font-sans text-xs font-semibold uppercase tracking-[0.2em] text-paper/50">Jelajahi</h3>
          <ul class="mt-4 space-y-2.5 text-sm text-paper/80">
            <li><a class='hover:text-white' href='/galeri'>Galeri Karya Siswa</a></li>
            <li><a class='hover:text-white' href='/blog'>Blog &amp; Info SNBP/SNBT</a></li>
            <li><a class='hover:text-white' href='/tentang'>Tentang Villa Merah</a></li>
            <li><a class='hover:text-white' href='/tentang#testimoni'>Testimoni</a></li>
            <li><a class='hover:text-white' href='/tentang#faq'>FAQ</a></li>
            <li><a class='hover:text-white' href='/daftar'>Pendaftaran</a></li>
          </ul>
        </div>
        <div>
          <h3 class="font-sans text-xs font-semibold uppercase tracking-[0.2em] text-paper/50">Lokasi</h3>
          <ul class="mt-4 space-y-4 text-sm text-paper/80">
            <li><strong class="block text-white">Bandung (Pusat)</strong>Jl. Anggrek No. 49<br><a class="hover:text-white" href="tel:+62227102177">(022) 7102177</a> · <a class="hover:text-white" href="tel:+6285720070066">0857-2007-0066</a></li>
            <li><strong class="block text-white">Jakarta Selatan</strong>Jl. Gandaria 1 No. 9A, Kebayoran Baru<br><a class="hover:text-white" href="tel:+62217246725">(021) 7246725</a> · <a class="hover:text-white" href="tel:+6287881723674">0878-8172-3674</a></li>
            <li><strong class="block text-white">Jakarta Pusat</strong>Jl. Cemp. Putih Tengah I No. 35<br><a class="hover:text-white" href="tel:+622129621989">(021) 29621989</a> · <a class="hover:text-white" href="tel:+6281311314446">0813-1131-4446</a></li>
          </ul>
          <p class="mt-4 text-xs text-paper/50">Layanan: Senin–Minggu, 10.00–17.00 WIB</p>
        </div>
      </div>
    </div>

    <div class="mt-14 flex flex-col gap-4 border-t border-paper/10 pt-8 text-xs text-paper/50 sm:flex-row sm:items-center sm:justify-between">
      <p>&copy; 2026 Bimbel Gambar Villa Merah. Hak cipta dilindungi.</p>
      <p class="font-display text-sm italic text-paper/60">Dari Villa Merah, sejak 1922.</p>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp -->
<a href="https://wa.me/6285720070066?text=Halo%20Villa%20Merah%2C%20saya%20ingin%20bertanya%20tentang%20program%20bimbel." target="_blank" rel="noopener"
   class="wa-float group fixed bottom-5 right-5 z-40 flex items-center gap-3 rounded-full bg-wa hover:bg-wa-dark py-3 pl-3 pr-3 text-white shadow-card-lg transition hover:pr-5 sm:bottom-8 sm:right-8"
   aria-label="Chat via WhatsApp">
  <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.4-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5l-.9-2.2c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4zM12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2c-1.5 0-3-.4-4.3-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
  <span class="max-w-0 overflow-hidden text-sm font-semibold whitespace-nowrap transition-all duration-300 group-hover:max-w-[160px] group-focus-visible:max-w-[160px]">Tanya via WhatsApp</span>
</a>

</body>
</html>

@endverbatim
