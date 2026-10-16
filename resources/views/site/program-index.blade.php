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

  <!-- Header halaman -->
  <section class="bg-grid-paper">
    <div class="container-x py-14 lg:py-20">
      <nav aria-label="Breadcrumb" class="text-xs text-ink-4"><ol class="flex gap-2"><li><a class='hover:text-ink' href='/'>Beranda</a></li><li aria-hidden="true">/</li><li aria-current="page" class="text-ink">Program</li></ol></nav>
      <div class="mt-6 grid gap-8 lg:grid-cols-12 lg:items-end">
        <div class="lg:col-span-7">
          <p class="eyebrow">Semua program</p>
          <h1 class="h-display mt-4 text-balance">@endverbatim
@if(filled($pageContent?->heading)){{ $pageContent->heading }}@else
@verbatimSatu tujuan, banyak jalan masuk.@endverbatim
@endif
@verbatim</h1>
          <p class="lead mt-5 max-w-2xl text-pretty">@endverbatim
@if(filled($pageContent?->intro)){{ $pageContent->intro }}@else
@verbatimPilih berdasarkan jurusan tujuan, jalur seleksi, dan cara belajar yang paling cocok dengan jadwalmu. Semua program mencakup review karya personal oleh pengajar.@endverbatim
@endif
@verbatim</p>
        </div>
        <div class="lg:col-span-5 lg:justify-self-end">
          <div class="card p-5 text-sm">
            <p class="font-semibold">Belum yakin? Konsultasi gratis 15 menit.</p>
            <p class="mt-1 text-ink-3">Kami bantu petakan jalur seleksi &amp; program.</p>
            <a href="https://wa.me/6285720070066?text=Halo%2C%20saya%20ingin%20konsultasi%20pemilihan%20program." target="_blank" rel="noopener" class="btn-wa mt-4 w-full">Chat WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Anchor nav -->
  <nav class="sticky top-[72px] z-30 border-b border-line bg-paper/90 backdrop-blur" aria-label="Kelompok program">
    <div class="container-x flex gap-6 overflow-x-auto py-3 text-sm font-medium [scrollbar-width:none]">
      <a href="#seni" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Seni Rupa &amp; Desain</a>
      <a href="#arsitektur" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Arsitektur</a>
      <a href="#sd-smp" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">SD &amp; SMP</a>
      <a href="#panduan" class="shrink-0 whitespace-nowrap border-b-2 border-transparent py-1 hover:border-brand-600">Panduan memilih</a>
    </div>
  </nav>

  <section class="py-12 lg:py-16">
    <div class="container-x">
      <!-- Seni Rupa & Desain -->
      <div class="mb-16 scroll-mt-32" id="seni">
        <div class="flex items-center gap-4"><h2 class="h-section">Seni Rupa &amp; Desain</h2><span class="h-px flex-1 bg-line"></span><span class="text-sm text-ink-4">6 program</span></div>
        <p class="mt-3 max-w-2xl text-ink-3">Untuk tujuan FSRD ITB (Seni Rupa, DKV, Desain Interior, Desain Produk, Kriya), ISI, UNPAD, dan program studi seni/desain lainnya.</p>
        <div class="mt-8 overflow-x-auto rounded-2xl ring-1 ring-line">
          <table class="w-full min-w-[820px] text-left text-sm">
            <thead class="bg-paper-2 text-xs uppercase tracking-wider text-ink-3"><tr><th scope="col" class="px-5 py-4 font-semibold">Program</th><th scope="col" class="px-5 py-4 font-semibold">Untuk</th><th scope="col" class="px-5 py-4 font-semibold">Jalur seleksi</th><th scope="col" class="px-5 py-4 font-semibold">Format</th><th scope="col" class="px-5 py-4 font-semibold">Durasi</th><th scope="col" class="px-5 py-4 font-semibold">Biaya</th><th scope="col" class="px-5 py-4"><span class="sr-only">Aksi</span></th></tr></thead>
            <tbody class="divide-y divide-line bg-white">
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Intensif SNBT</a><span class="ml-2 chip-brand">Populer</span></td><td class="px-5 py-4">Kelas XII</td><td class="px-5 py-4">SNBT</td><td class="px-5 py-4">Offline / Online</td><td class="px-5 py-4">± 6 bulan</td><td class="px-5 py-4 font-semibold">Rp 9.000.000</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Intensif SNBP</a></td><td class="px-5 py-4">Kelas XII</td><td class="px-5 py-4">SNBP (portofolio)</td><td class="px-5 py-4">Offline / Online</td><td class="px-5 py-4">± 4 bulan</td><td class="px-5 py-4 font-semibold">Rp 9.000.000</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Intensif SNBP + SNBT</a><span class="ml-2 chip-ochre">Paket hemat</span></td><td class="px-5 py-4">Kelas XII</td><td class="px-5 py-4">SNBP &amp; SNBT</td><td class="px-5 py-4">Offline / Online</td><td class="px-5 py-4">± 8 bulan</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Intensif Seleksi Mandiri</a></td><td class="px-5 py-4">Kelas XII / Gap year</td><td class="px-5 py-4">Mandiri PTN &amp; PTS</td><td class="px-5 py-4">Offline / Online</td><td class="px-5 py-4">± 2 bulan</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Blended Learning</a></td><td class="px-5 py-4">Kelas X–XII</td><td class="px-5 py-4">Semua jalur</td><td class="px-5 py-4">Tatap muka + online</td><td class="px-5 py-4">Per semester</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Online Learning</a></td><td class="px-5 py-4">Semua jenjang</td><td class="px-5 py-4">Semua jalur</td><td class="px-5 py-4">Online mandiri</td><td class="px-5 py-4">Per bulan</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Arsitektur -->
      <div class="mb-16 scroll-mt-32" id="arsitektur">
        <div class="flex items-center gap-4"><h2 class="h-section">Arsitektur</h2><span class="h-px flex-1 bg-line"></span><span class="text-sm text-ink-4">4 program</span></div>
        <p class="mt-3 max-w-2xl text-ink-3">Gambar teknik, perspektif, maket, dan kecerdasan spasial untuk Arsitektur ITB, UNPAR, UI, UGM, dan lainnya — termasuk bekal sketsa untuk perkuliahan.</p>
        <div class="mt-8 overflow-x-auto rounded-2xl ring-1 ring-line">
          <table class="w-full min-w-[820px] text-left text-sm">
            <thead class="bg-paper-2 text-xs uppercase tracking-wider text-ink-3"><tr><th scope="col" class="px-5 py-4 font-semibold">Program</th><th scope="col" class="px-5 py-4 font-semibold">Untuk</th><th scope="col" class="px-5 py-4 font-semibold">Jalur seleksi</th><th scope="col" class="px-5 py-4 font-semibold">Format</th><th scope="col" class="px-5 py-4 font-semibold">Durasi</th><th scope="col" class="px-5 py-4 font-semibold">Biaya</th><th scope="col" class="px-5 py-4"><span class="sr-only">Aksi</span></th></tr></thead>
            <tbody class="divide-y divide-line bg-white">
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Intensif Arsitektur</a><span class="ml-2 chip-brand">Unggulan</span></td><td class="px-5 py-4">Kelas XII</td><td class="px-5 py-4">SNBT / Mandiri</td><td class="px-5 py-4">Offline</td><td class="px-5 py-4">± 6 bulan</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Intensif Online Arsitektur</a></td><td class="px-5 py-4">Kelas XII</td><td class="px-5 py-4">SNBT / Mandiri</td><td class="px-5 py-4">Online live</td><td class="px-5 py-4">± 6 bulan</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Blended Learning Arsitektur</a></td><td class="px-5 py-4">Kelas X–XII</td><td class="px-5 py-4">Semua jalur</td><td class="px-5 py-4">Tatap muka + online</td><td class="px-5 py-4">Per semester</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
              <tr class="hover:bg-paper"><td class="px-5 py-4"><a class='font-semibold text-ink hover:text-brand-700' href='/program'>Online Learning Arsitektur</a></td><td class="px-5 py-4">Semua jenjang</td><td class="px-5 py-4">Semua jalur</td><td class="px-5 py-4">Online mandiri</td><td class="px-5 py-4">Per bulan</td><td class="px-5 py-4 font-semibold">Hubungi kami</td><td class="px-5 py-4 text-right"><a class='btn-outline px-4 py-1.5' href='/program'>Detail</a></td></tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- SD & SMP -->
      <div class="scroll-mt-32" id="sd-smp">
        <div class="flex items-center gap-4"><h2 class="h-section">SD &amp; SMP</h2><span class="h-px flex-1 bg-line"></span><span class="text-sm text-ink-4">1 program</span></div>
        <div class="card mt-8 grid overflow-hidden md:grid-cols-12">
          <img src="/assets/img/kegiatan-sketsa-luar.webp" srcset="assets/img/kegiatan-sketsa-luar-sm.webp 320w, assets/img/kegiatan-sketsa-luar.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Kegiatan jalan-jalan menggambar" width="500" height="500" loading="lazy" class="h-full w-full object-cover md:col-span-4">
          <div class="p-8 md:col-span-8">
            <h3 class="h-card">Program SD &amp; SMP</h3>
            <p class="mt-2 text-ink-3">Kelas hobi dan pengembangan bakat: dasar menggambar, warna, komposisi, dan kreativitas. Kelas kecil, suasana bermain, sertifikat tiap level.</p>
            <dl class="mt-5 grid gap-4 text-sm sm:grid-cols-3"><div><dt class="text-ink-4">Format</dt><dd class="font-semibold">Offline, akhir pekan</dd></div><div><dt class="text-ink-4">Durasi</dt><dd class="font-semibold">Per level (3 bulan)</dd></div><div><dt class="text-ink-4">Biaya</dt><dd class="font-semibold">Hubungi kami</dd></div></dl>
            <a class='btn-primary mt-6' href='/program'>Lihat detail</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bantuan memilih -->
  <section id="panduan" class="scroll-mt-24 bg-ink py-16 text-paper lg:py-20">
    <div class="container-x grid gap-10 lg:grid-cols-12 lg:items-center">
      <div class="lg:col-span-7"><p class="eyebrow text-brand-400">Panduan singkat</p><h2 class="h-section mt-4 text-paper">Mana yang cocok untukku?</h2>
        <ul class="mt-6 space-y-4 text-paper/80">
          <li class="flex gap-4"><span class="chip-brand shrink-0">Kelas XII</span><span>Nilai rapor bagus &amp; sekolah eligible → <strong class="text-paper">Intensif SNBP</strong>. Ingin jaga-jaga → <strong class="text-paper">Paket SNBP + SNBT</strong>.</span></li>
          <li class="flex gap-4"><span class="chip-brand shrink-0">Kelas X–XI</span><span>Mulai membangun dasar dan portofolio sejak dini → <strong class="text-paper">Blended Learning</strong>.</span></li>
          <li class="flex gap-4"><span class="chip-brand shrink-0">Luar kota</span><span>Tidak di Bandung/Jakarta → <strong class="text-paper">Intensif Online</strong> (live) atau <strong class="text-paper">Online Learning</strong> (mandiri).</span></li>
          <li class="flex gap-4"><span class="chip-brand shrink-0">Gap year</span><span>Sudah lulus dan ingin coba lagi → <strong class="text-paper">Intensif SNBT</strong> + <strong class="text-paper">Seleksi Mandiri</strong>.</span></li>
        </ul>
      </div>
      <div class="lg:col-span-5"><div class="rounded-2xl bg-paper/5 p-8 ring-1 ring-paper/10"><p class="font-display text-2xl">Masih ragu?</p><p class="mt-2 text-paper/60">Ceritakan tujuanmu, kami rekomendasikan program yang tepat — gratis.</p><a href="https://wa.me/6285720070066?text=Halo%2C%20saya%20ingin%20rekomendasi%20program%20yang%20cocok." target="_blank" rel="noopener" class="btn-wa mt-6 w-full">Konsultasi via WhatsApp</a><a class='btn mt-3 w-full border border-paper/30 text-paper hover:bg-paper hover:text-ink' href='/daftar'>Langsung daftar</a></div></div>
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
