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


<main id="konten">

  <!-- ============ HERO ============ -->
  <section class="relative overflow-hidden bg-grid-paper pt-[72px]">
    <div aria-hidden="true" class="pointer-events-none absolute -left-40 top-24 h-[480px] w-[480px] rounded-full bg-brand-600/10 blur-3xl"></div>
    <div aria-hidden="true" class="pointer-events-none absolute -right-32 bottom-0 h-[420px] w-[420px] rounded-full bg-ochre-300/30 blur-3xl"></div>

    <div class="container-x relative grid items-center gap-12 py-16 lg:grid-cols-12 lg:py-24">
      <div class="lg:col-span-6">
        <p class="eyebrow reveal">Bimbel gambar · sejak 1992 · Bandung &amp; Jakarta</p>
        <h1 class="h-display mt-5 text-balance reveal">@endverbatim
@if(filled($pageContent?->heading)){{ $pageContent->heading }}@else
@verbatimSiap masuk <span class="mark-brush">FSRD ITB</span> &amp; Arsitektur — dari coretan pertama sampai portofolio.@endverbatim
@endif
@verbatim</h1>
        <p class="lead mt-6 max-w-xl text-pretty reveal">@endverbatim
@if(filled($pageContent?->intro)){{ $pageContent->intro }}@else
@verbatimPersiapan SNBP, SNBT, dan Seleksi Mandiri untuk Seni Rupa, Desain, dan Arsitektur. Dibimbing pengajar alumni FSRD ITB, di studio bersejarah tahun 1922 atau online dari mana saja.@endverbatim
@endif
@verbatim</p>
        <div class="mt-8 flex flex-wrap gap-3 reveal">
          <a class='btn-primary btn-lg' href='/program-index'>Lihat Program</a>
          <a href="https://wa.me/6285720070066?text=Halo%20Villa%20Merah%2C%20saya%20ingin%20konsultasi%20program." target="_blank" rel="noopener" class="btn-outline btn-lg">
            <svg class="h-5 w-5 text-[#25D366]" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.5 14.4c-.3-.1-1.8-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.3-.5-2.4-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6l.4-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5l-.9-2.2c-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.2 5.1 4.5.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.8-.7 2-1.4.2-.7.2-1.3.2-1.4-.1-.2-.3-.3-.6-.4zM12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2zm0 18.2c-1.5 0-3-.4-4.3-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2z"/></svg>
            Konsultasi Gratis
          </a>
        </div>
        <ul class="mt-10 flex flex-wrap gap-x-8 gap-y-3 text-sm text-ink-3 reveal">
          <li class="flex items-center gap-2"><svg class="h-4 w-4 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>Gratis biaya pendaftaran bulan ini</li>
          <li class="flex items-center gap-2"><svg class="h-4 w-4 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>Kelas offline &amp; online</li>
          <li class="flex items-center gap-2"><svg class="h-4 w-4 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg>Video tutorial akses 24/7</li>
        </ul>
      </div>

      <!-- Kolase karya -->
      <div class="relative lg:col-span-6 reveal" aria-hidden="true">
        <div class="relative mx-auto aspect-[5/4] max-w-xl">
          <div class="frame absolute left-0 top-6 w-[58%] -rotate-3 transition hover:rotate-0 hover:z-10"><img src="/assets/img/karya-1.webp" srcset="assets/img/karya-1-sm.webp 320w, assets/img/karya-1.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="500" height="351" fetchpriority="high"></div>
          <div class="frame absolute right-0 top-0 w-[46%] rotate-2 transition hover:rotate-0 hover:z-10"><img src="/assets/img/karya-12.webp" srcset="assets/img/karya-12-sm.webp 320w, assets/img/karya-12.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="500" height="686" class="!aspect-[3/4]"></div>
          <div class="frame absolute bottom-0 left-[22%] w-[52%] rotate-1 transition hover:rotate-0 hover:z-10"><img src="/assets/img/karya-4.webp" srcset="assets/img/karya-4-sm.webp 320w, assets/img/karya-4.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="500" height="400"></div>
          <!-- Stiker / badge -->
          <div class="absolute -left-2 bottom-10 rounded-full bg-ink px-4 py-2 font-display text-sm italic text-paper shadow-card-lg animate-float sm:left-4">Karya siswa Villa Merah ✎</div>
          <div class="absolute -right-2 top-[52%] flex items-center gap-2 rounded-full bg-white px-3 py-2 text-xs font-semibold shadow-card-lg sm:right-2">
            <span class="flex h-6 w-6 items-center justify-center rounded-full bg-brand-600 text-white">★</span> Portofolio siap SNBP
          </div>
        </div>
      </div>
    </div>

    <!-- Statistik -->
    <div class="border-y border-line bg-paper-2/60">
      <dl class="container-x grid grid-cols-2 divide-line py-6 sm:grid-cols-4 sm:divide-x">
        <!-- TODO(owner): angka alumni & tingkat kelulusan diisi dari data resmi -->
        <div class="px-4 py-2 text-center"><dt class="text-xs font-semibold uppercase tracking-widest text-ink-4">Berpengalaman</dt><dd class="mt-1 font-display text-3xl">30<span class="text-brand-600">+</span> <span class="text-base text-ink-3">tahun</span></dd></div>
        <div class="px-4 py-2 text-center"><dt class="text-xs font-semibold uppercase tracking-widest text-ink-4">Alumni diterima</dt><dd class="mt-1 font-display text-3xl">1.000<span class="text-brand-600">+</span></dd></div>
        <div class="px-4 py-2 text-center"><dt class="text-xs font-semibold uppercase tracking-widest text-ink-4">Lokasi studio</dt><dd class="mt-1 font-display text-3xl">3 <span class="text-base text-ink-3">kota</span></dd></div>
        <div class="px-4 py-2 text-center"><dt class="text-xs font-semibold uppercase tracking-widest text-ink-4">Program pilihan</dt><dd class="mt-1 font-display text-3xl">11</dd></div>
      </dl>
    </div>
  </section>

  <!-- ============ PTN TUJUAN (marquee) ============ -->
  <section class="py-10" aria-labelledby="ptn-heading">
    <div class="container-x">
      <h2 id="ptn-heading" class="text-center text-xs font-semibold uppercase tracking-[0.25em] text-ink-4">Alumni kami diterima di</h2>
    </div>
    <div class="relative mt-6 overflow-hidden [mask-image:linear-gradient(to_right,transparent,black_10%,black_90%,transparent)]">
      <div class="flex w-max animate-marquee gap-12 whitespace-nowrap font-display text-2xl text-ink-3 hover:[animation-play-state:paused]">
        <!-- TODO(owner): ganti dengan logo resmi PTN -->
        <span>FSRD ITB</span><span>·</span><span>Arsitektur ITB</span><span>·</span><span>Arsitektur UNPAR</span><span>·</span><span>ISI Yogyakarta</span><span>·</span><span>DKV UNPAD</span><span>·</span><span>Arsitektur UI</span><span>·</span><span>Desain Interior ITB</span><span>·</span><span>UNS</span><span>·</span><span>UPI</span><span>·</span>
        <span>FSRD ITB</span><span>·</span><span>Arsitektur ITB</span><span>·</span><span>Arsitektur UNPAR</span><span>·</span><span>ISI Yogyakarta</span><span>·</span><span>DKV UNPAD</span><span>·</span><span>Arsitektur UI</span><span>·</span><span>Desain Interior ITB</span><span>·</span><span>UNS</span><span>·</span><span>UPI</span><span>·</span>
      </div>
    </div>
  </section>

  <!-- ============ KENAPA VILLA MERAH ============ -->
  <section class="py-20 lg:py-28" aria-labelledby="kenapa-heading">
    <div class="container-x">
      <div class="grid gap-10 lg:grid-cols-12 lg:gap-16">
        <div class="lg:col-span-5 reveal">
          <p class="eyebrow">Kenapa Villa Merah</p>
          <h2 id="kenapa-heading" class="h-section mt-4 text-balance">Ujian gambar tidak diajarkan di sekolah. Di sini, itu inti kurikulumnya.</h2>
          <p class="mt-5 text-ink-3 text-pretty">Untuk lolos FSRD ITB atau Arsitektur, bobot penilaian menggambar sangat tinggi — sementara materinya nyaris tak ada di SMA. Villa Merah mengasah dasar menggambar, gambar naratif, komposisi, hingga kecerdasan spasial dan skolastik.</p>
          <a class='btn-outline mt-8' href='/tentang'>Kenali metode kami</a>
        </div>
        <div class="grid gap-5 sm:grid-cols-2 lg:col-span-7">
          <div class="card p-7 reveal">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342"/></svg></div>
            <h3 class="h-card mt-5">Pengajar alumni FSRD &amp; Arsitektur ITB</h3>
            <p class="mt-2 text-sm leading-relaxed text-ink-3">Dibimbing langsung oleh praktisi yang pernah melewati ujian yang sama — termasuk Pidi Baiq yang mengajar di sini sejak 1992.</p>
          </div>
          <div class="card p-7 reveal">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-ochre-100 text-ochre-700"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42"/></svg></div>
            <h3 class="h-card mt-5">Kurikulum berbasis portofolio</h3>
            <p class="mt-2 text-sm leading-relaxed text-ink-3">Gambar naratif, komposisi, perspektif, dan karya bebas — disusun mengikuti kriteria penilaian SNBP, SNBT, dan Seleksi Mandiri terbaru.</p>
          </div>
          <div class="card p-7 reveal">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-50 text-brand-600"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25"/></svg></div>
            <h3 class="h-card mt-5">Offline, online, atau blended</h3>
            <p class="mt-2 text-sm leading-relaxed text-ink-3">Tatap muka di Bandung &amp; Jakarta, live streaming, video tutorial eksklusif, dan personal online counseling — belajar kapan pun.</p>
          </div>
          <div class="card p-7 reveal">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-ochre-100 text-ochre-700"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.6"><path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0"/></svg></div>
            <h3 class="h-card mt-5">Pendampingan sampai lolos</h3>
            <p class="mt-2 text-sm leading-relaxed text-ink-3">Try out, simulasi TPS, VIP guidance pengumpulan karya, dan konsultasi pemilihan jurusan hingga hari pengumuman.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ PROGRAM ============ -->
  <section id="program" class="bg-ink py-20 text-paper lg:py-28" aria-labelledby="program-heading" x-data="{ tab: 'seni' }">
    <div class="container-x">
      <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
        <div class="max-w-2xl reveal">
          <p class="eyebrow text-brand-400">Program</p>
          <h2 id="program-heading" class="h-section mt-4 text-paper text-balance">Pilih jalur yang sesuai tujuanmu.</h2>
          <p class="mt-4 text-paper/60 text-pretty">Semua program bisa diambil offline di Bandung/Jakarta, online, atau kombinasi keduanya.</p>
        </div>
        <div class="flex max-w-full gap-1 self-start overflow-x-auto rounded-full bg-paper/10 p-1 [scrollbar-width:none]" role="tablist" aria-label="Kelompok program">
          <button role="tab" @click="tab = 'seni'" :aria-selected="tab === 'seni'" :class="tab === 'seni' ? 'bg-paper text-ink' : 'text-paper/70 hover:text-paper'" class="shrink-0 whitespace-nowrap rounded-full px-4 py-2 text-sm font-semibold transition">Seni Rupa &amp; Desain</button>
          <button role="tab" @click="tab = 'ars'" :aria-selected="tab === 'ars'" :class="tab === 'ars' ? 'bg-paper text-ink' : 'text-paper/70 hover:text-paper'" class="shrink-0 whitespace-nowrap rounded-full px-4 py-2 text-sm font-semibold transition">Arsitektur</button>
          <button role="tab" @click="tab = 'sd'" :aria-selected="tab === 'sd'" :class="tab === 'sd' ? 'bg-paper text-ink' : 'text-paper/70 hover:text-paper'" class="shrink-0 whitespace-nowrap rounded-full px-4 py-2 text-sm font-semibold transition">SD &amp; SMP</button>
        </div>
      </div>

      <!-- Tab: Seni Rupa & Desain -->
      <div x-show="tab === 'seni'" role="tabpanel" class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        <!-- Kartu program (unggulan) -->
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper text-ink ring-1 ring-brand-600 reveal">
          <div class="absolute right-4 top-4 z-10 chip-brand">Paling diminati</div>
          <a class='block aspect-[16/10] overflow-hidden' href='/program'><img src="/assets/img/kegiatan-still-life.webp" srcset="assets/img/kegiatan-still-life-sm.webp 320w, assets/img/kegiatan-still-life.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Suasana kelas Intensif SNBT — latihan still life" width="500" height="500" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105"></a>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2"><span class="chip">Kelas XII</span><span class="chip">Offline / Online</span></div>
            <h3 class="h-card mt-4"><a class='after:absolute after:inset-0' href='/program'>Intensif SNBT Seni Rupa &amp; Desain</a></h3>
            <p class="mt-2 text-sm text-ink-3">Persiapan UTBK-SNBT + portofolio untuk FSRD ITB dan PTN seni/desain lain. Kurikulum khusus, video tutorial eksklusif.</p>
            <div class="mt-auto flex items-end justify-between pt-6">
              <div><p class="text-xs text-ink-4">Mulai dari</p><p class="font-display text-2xl">Rp 9.000.000</p></div>
              <span class="btn-primary relative z-10 px-4 py-2">Detail</span>
            </div>
          </div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper text-ink reveal">
          <a class='block aspect-[16/10] overflow-hidden' href='/program'><img src="/assets/img/karya-2.webp" srcset="assets/img/karya-2-sm.webp 320w, assets/img/karya-2.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Gambar naratif karya siswa program SNBP" width="500" height="371" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105"></a>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2"><span class="chip">Kelas XII</span><span class="chip">Portofolio</span></div>
            <h3 class="h-card mt-4"><a class='after:absolute after:inset-0' href='/program'>Intensif SNBP Seni Rupa &amp; Desain</a></h3>
            <p class="mt-2 text-sm text-ink-3">Fokus menyusun portofolio gambar naratif &amp; karya terbaik sesuai kriteria penilaian SNBP (bobot 50%).</p>
            <div class="mt-auto flex items-end justify-between pt-6">
              <div><p class="text-xs text-ink-4">Mulai dari</p><p class="font-display text-2xl">Rp 9.000.000</p></div>
              <span class="btn-outline relative z-10 px-4 py-2">Detail</span>
            </div>
          </div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper text-ink reveal">
          <a class='block aspect-[16/10] overflow-hidden' href='/program'><img src="/assets/img/kegiatan-cat-air.webp" srcset="assets/img/kegiatan-cat-air-sm.webp 320w, assets/img/kegiatan-cat-air.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Workshop cat air program Seleksi Mandiri" width="500" height="544" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105"></a>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2"><span class="chip">Kelas XII / Gap year</span><span class="chip">Ujian gambar</span></div>
            <h3 class="h-card mt-4"><a class='after:absolute after:inset-0' href='/program'>Intensif Seleksi Mandiri</a></h3>
            <p class="mt-2 text-sm text-ink-3">Persiapan ujian mandiri PTN &amp; PTS (ITB, UNPAR, ISI) yang masih mengujikan tes menggambar langsung.</p>
            <div class="mt-auto flex items-end justify-between pt-6">
              <div><p class="text-xs text-ink-4">Biaya</p><p class="font-display text-lg">Hubungi kami</p></div>
              <span class="btn-outline relative z-10 px-4 py-2">Detail</span>
            </div>
          </div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper/5 text-paper ring-1 ring-paper/10 reveal">
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2"><span class="chip bg-paper/10 text-paper/80">Online</span><span class="chip bg-paper/10 text-paper/80">Kelas X–XII</span></div>
            <h3 class="h-card mt-4 text-paper"><a class='after:absolute after:inset-0' href='/program'>Intensif Online Seni Rupa &amp; Desain</a></h3>
            <p class="mt-2 text-sm text-paper/60">Live class terjadwal + video tutorial + review karya personal. Untuk siswa di luar Bandung/Jakarta.</p>
            <span class="mt-auto pt-6 text-sm font-semibold text-brand-400">Lihat detail &rarr;</span>
          </div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper/5 text-paper ring-1 ring-paper/10 reveal">
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2"><span class="chip bg-paper/10 text-paper/80">Blended</span><span class="chip bg-paper/10 text-paper/80">Kelas X–XII</span></div>
            <h3 class="h-card mt-4 text-paper"><a class='after:absolute after:inset-0' href='/program'>Blended Learning Seni Rupa &amp; Desain</a></h3>
            <p class="mt-2 text-sm text-paper/60">Kombinasi tatap muka mingguan di studio dan materi online. Fleksibel untuk yang masih sekolah.</p>
            <span class="mt-auto pt-6 text-sm font-semibold text-brand-400">Lihat detail &rarr;</span>
          </div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper/5 text-paper ring-1 ring-paper/10 reveal">
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2"><span class="chip bg-paper/10 text-paper/80">Online</span><span class="chip bg-paper/10 text-paper/80">Belajar mandiri</span></div>
            <h3 class="h-card mt-4 text-paper"><a class='after:absolute after:inset-0' href='/program'>Online Learning Seni Rupa &amp; Desain</a></h3>
            <p class="mt-2 text-sm text-paper/60">Akses video tutorial 24/7, tugas terstruktur, dan konsultasi online. Mulai dari dasar menggambar.</p>
            <span class="mt-auto pt-6 text-sm font-semibold text-brand-400">Lihat detail &rarr;</span>
          </div>
        </article>
      </div>

      <!-- Tab: Arsitektur -->
      <div x-show="tab === 'ars'" x-cloak role="tabpanel" class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper text-ink ring-1 ring-brand-600">
          <div class="absolute right-4 top-4 z-10 chip-brand">Unggulan</div>
          <a class='block aspect-[16/10] overflow-hidden' href='/program'><img src="/assets/img/kegiatan-maket.webp" srcset="assets/img/kegiatan-maket-sm.webp 320w, assets/img/kegiatan-maket.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Proses merancang maket di kelas Arsitektur" width="500" height="500" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105"></a>
          <div class="flex flex-1 flex-col p-6">
            <div class="flex flex-wrap gap-2"><span class="chip">Kelas XII</span><span class="chip">Offline / Online</span></div>
            <h3 class="h-card mt-4"><a class='after:absolute after:inset-0' href='/program'>Intensif Arsitektur</a></h3>
            <p class="mt-2 text-sm text-ink-3">Gambar teknik, perspektif, maket, dan kecerdasan spasial untuk Arsitektur ITB, UNPAR, UI, dan lainnya.</p>
            <div class="mt-auto flex items-end justify-between pt-6">
              <div><p class="text-xs text-ink-4">Biaya</p><p class="font-display text-lg">Hubungi kami</p></div>
              <span class="btn-primary relative z-10 px-4 py-2">Detail</span>
            </div>
          </div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper/5 text-paper ring-1 ring-paper/10">
          <div class="flex flex-1 flex-col p-6"><div class="flex flex-wrap gap-2"><span class="chip bg-paper/10 text-paper/80">Online</span></div><h3 class="h-card mt-4 text-paper"><a class='after:absolute after:inset-0' href='/program'>Intensif Online Arsitektur</a></h3><p class="mt-2 text-sm text-paper/60">Live class + review karya untuk calon mahasiswa arsitektur di luar kota.</p><span class="mt-auto pt-6 text-sm font-semibold text-brand-400">Lihat detail &rarr;</span></div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper/5 text-paper ring-1 ring-paper/10">
          <div class="flex flex-1 flex-col p-6"><div class="flex flex-wrap gap-2"><span class="chip bg-paper/10 text-paper/80">Blended</span></div><h3 class="h-card mt-4 text-paper"><a class='after:absolute after:inset-0' href='/program'>Blended Learning Arsitektur</a></h3><p class="mt-2 text-sm text-paper/60">Tatap muka mingguan + materi online. Cocok untuk kelas X–XI.</p><span class="mt-auto pt-6 text-sm font-semibold text-brand-400">Lihat detail &rarr;</span></div>
        </article>
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper/5 text-paper ring-1 ring-paper/10">
          <div class="flex flex-1 flex-col p-6"><div class="flex flex-wrap gap-2"><span class="chip bg-paper/10 text-paper/80">Online</span></div><h3 class="h-card mt-4 text-paper"><a class='after:absolute after:inset-0' href='/program'>Online Learning Arsitektur</a></h3><p class="mt-2 text-sm text-paper/60">Belajar mandiri lewat video tutorial dan tugas terstruktur.</p><span class="mt-auto pt-6 text-sm font-semibold text-brand-400">Lihat detail &rarr;</span></div>
        </article>
      </div>

      <!-- Tab: SD & SMP -->
      <div x-show="tab === 'sd'" x-cloak role="tabpanel" class="mt-12 grid gap-5 md:grid-cols-2 lg:grid-cols-3">
        <article class="group relative flex flex-col overflow-hidden rounded-2xl bg-paper text-ink md:col-span-2">
          <div class="grid sm:grid-cols-2">
            <a class='block aspect-[16/10] overflow-hidden sm:aspect-auto' href='/program'><img src="/assets/img/kegiatan-sketsa-luar.webp" srcset="assets/img/kegiatan-sketsa-luar-sm.webp 320w, assets/img/kegiatan-sketsa-luar.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Kegiatan jalan-jalan menggambar untuk siswa SD & SMP" width="500" height="500" loading="lazy" class="h-full w-full object-cover transition duration-500 group-hover:scale-105"></a>
            <div class="flex flex-col p-6">
              <div class="flex flex-wrap gap-2"><span class="chip">SD</span><span class="chip">SMP</span><span class="chip">Hobi &amp; bakat</span></div>
              <h3 class="h-card mt-4"><a class='after:absolute after:inset-0' href='/program'>Program SD &amp; SMP</a></h3>
              <p class="mt-2 text-sm text-ink-3">Menumbuhkan minat dan dasar menggambar sejak dini: sketsa, warna, komposisi, dan kreativitas — dengan suasana bermain.</p>
              <div class="mt-auto flex items-end justify-between pt-6"><div><p class="text-xs text-ink-4">Biaya</p><p class="font-display text-lg">Hubungi kami</p></div><span class="btn-outline relative z-10 px-4 py-2">Detail</span></div>
            </div>
          </div>
        </article>
      </div>

      <div class="mt-10 flex flex-col items-center justify-between gap-4 rounded-2xl border border-paper/10 p-6 sm:flex-row">
        <p class="text-paper/70">Masih bingung program mana yang cocok? Tim kami bantu pilihkan.</p>
        <div class="flex gap-3"><a class='btn-outline border-paper/30 text-paper hover:bg-paper hover:text-ink' href='/program-index'>Bandingkan semua</a><a href="https://wa.me/6285720070066?text=Halo%2C%20saya%20bingung%20memilih%20program%20yang%20cocok." target="_blank" rel="noopener" class="btn-wa">Tanya via WA</a></div>
      </div>
    </div>
  </section>

  <!-- ============ GALERI KARYA ============ -->
  <section class="py-20 lg:py-28" aria-labelledby="galeri-heading" x-data="lightbox">
    <div class="container-x">
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between reveal">
        <div><p class="eyebrow">Galeri</p><h2 id="galeri-heading" class="h-section mt-4">Karya siswa yang bicara sendiri.</h2></div>
        <a class='btn-outline' href='/galeri'>Lihat semua karya</a>
      </div>
      <div class="masonry mt-12">
        <a href="/assets/img/karya-1.webp" data-lightbox="assets/img/karya-1.webp" data-caption="Gambar naratif — pensil di atas kertas" class="frame block reveal"><img src="/assets/img/karya-1.webp" srcset="assets/img/karya-1-sm.webp 320w, assets/img/karya-1.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Gambar naratif bertema stand up comedy, pensil" width="500" height="351" loading="lazy"></a>
        <a href="/assets/img/karya-12.webp" data-lightbox="assets/img/karya-12.webp" data-caption="Karya siswa Villa Merah" class="frame block reveal"><img src="/assets/img/karya-12.webp" srcset="assets/img/karya-12-sm.webp 320w, assets/img/karya-12.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya siswa: ilustrasi pensil format potret" width="500" height="686" loading="lazy"></a>
        <a href="/assets/img/karya-3.webp" data-lightbox="assets/img/karya-3.webp" data-caption="Karya siswa Villa Merah" class="frame block reveal"><img src="/assets/img/karya-3.webp" srcset="assets/img/karya-3-sm.webp 320w, assets/img/karya-3.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya siswa: gambar komposisi" width="500" height="330" loading="lazy"></a>
        <a href="/assets/img/karya-13.webp" data-lightbox="assets/img/karya-13.webp" data-caption="Karya siswa Villa Merah" class="frame block reveal"><img src="/assets/img/karya-13.webp" srcset="assets/img/karya-13-sm.webp 320w, assets/img/karya-13.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya siswa: ilustrasi format potret" width="500" height="760" loading="lazy"></a>
        <a href="/assets/img/karya-5.webp" data-lightbox="assets/img/karya-5.webp" data-caption="Karya siswa Villa Merah" class="frame block reveal"><img src="/assets/img/karya-5.webp" srcset="assets/img/karya-5-sm.webp 320w, assets/img/karya-5.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya siswa: gambar naratif" width="500" height="330" loading="lazy"></a>
        <a href="/assets/img/karya-6.webp" data-lightbox="assets/img/karya-6.webp" data-caption="Karya siswa Villa Merah" class="frame block reveal"><img src="/assets/img/karya-6.webp" srcset="assets/img/karya-6-sm.webp 320w, assets/img/karya-6.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya siswa: gambar naratif" width="500" height="353" loading="lazy"></a>
        <a href="/assets/img/karya-7.webp" data-lightbox="assets/img/karya-7.webp" data-caption="Karya siswa Villa Merah" class="frame block reveal"><img src="/assets/img/karya-7.webp" srcset="assets/img/karya-7-sm.webp 320w, assets/img/karya-7.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya siswa: gambar naratif" width="500" height="348" loading="lazy"></a>
        <a href="/assets/img/karya-8.webp" data-lightbox="assets/img/karya-8.webp" data-caption="Karya siswa Villa Merah" class="frame block reveal"><img src="/assets/img/karya-8.webp" srcset="assets/img/karya-8-sm.webp 320w, assets/img/karya-8.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya siswa: gambar naratif" width="500" height="367" loading="lazy"></a>
      </div>
    </div>
    <div x-show="openIdx !== null" x-cloak x-transition.opacity @click.self="openIdx = null" class="fixed inset-0 z-[60] flex items-center justify-center bg-ink/95 p-4" role="dialog" aria-modal="true" aria-label="Pratinjau karya">
  <button @click="openIdx = null" class="absolute right-4 top-4 flex h-11 w-11 items-center justify-center rounded-full bg-paper/10 text-paper hover:bg-paper/20" aria-label="Tutup"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" d="M6 18 18 6M6 6l12 12"/></svg></button>
  <button @click="prev()" class="absolute left-4 top-1/2 hidden h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-paper/10 text-paper hover:bg-paper/20 sm:flex" aria-label="Sebelumnya"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/></svg></button>
  <button @click="next()" class="absolute right-4 top-1/2 hidden h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-paper/10 text-paper hover:bg-paper/20 sm:flex" aria-label="Berikutnya"><svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg></button>
  <figure class="max-h-full max-w-5xl text-center" x-show="openIdx !== null">
    <img :src="items[openIdx]?.src" :alt="items[openIdx]?.alt" class="mx-auto max-h-[80vh] rounded-lg object-contain">
    <figcaption class="mt-3 font-display italic text-paper/70" x-text="items[openIdx]?.caption"></figcaption>
  </figure>
</div>

  </section>

  <!-- ============ HERITAGE 1922 ============ -->
  <section class="relative overflow-hidden bg-paper-2 py-20 lg:py-28" aria-labelledby="heritage-heading">
    <div class="container-x grid items-center gap-12 lg:grid-cols-12">
      <div class="relative lg:col-span-6 reveal">
        <div class="frame -rotate-1"><img src="/assets/img/villa-1922.webp" srcset="assets/img/villa-1922-sm.webp 320w, assets/img/villa-1922.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="Bangunan Villa Merah, Jl. Anggrek No. 49 Bandung, dibangun 1922 oleh R.L.A. Schoemaker" width="400" height="400" loading="lazy" class="aspect-square grayscale transition duration-700 hover:grayscale-0"></div>
        <div class="absolute -bottom-6 -right-2 rounded-2xl bg-brand-600 px-6 py-4 text-paper shadow-card-lg sm:right-6">
          <p class="font-display text-4xl leading-none">1922</p><p class="mt-1 text-xs uppercase tracking-widest text-paper/80">Arsitek R.L.A. Schoemaker</p>
        </div>
      </div>
      <div class="lg:col-span-6 reveal">
        <p class="eyebrow">Cerita kami</p>
        <h2 id="heritage-heading" class="h-section mt-4 text-balance">Belajar menggambar di rumah para guru besar ITB.</h2>
        <div class="mt-6 space-y-4 text-ink-3 text-pretty">
          <p>Villa Merah dibangun tahun 1922 oleh arsitek Belanda R.L.A. Schoemaker sebagai rumah dinas guru besar ITB, lalu menjadi asrama mahasiswa. Dari rumah inilah bimbingan belajar Seni Rupa Desain ITB dan Arsitektur bermula.</p>
          <p>Di antara alumni yang pernah tinggal di sini: <strong class="text-ink">Prof. Muhtar Apin</strong> (Guru Besar Seni Rupa ITB) dan <strong class="text-ink">Prof. Hasan Purbo</strong> (Guru Besar Arsitektur ITB). Semangat itu yang kami teruskan ke setiap siswa.</p>
        </div>
        <a class='btn-secondary mt-8' href='/tentang'>Baca sejarah Villa Merah</a>
      </div>
    </div>
  </section>

  <!-- ============ TESTIMONI ============ -->
  <section id="testimoni" class="py-20 lg:py-28" aria-labelledby="testi-heading" x-data="carousel">
    <div class="container-x">
      <div class="flex flex-col gap-6 sm:flex-row sm:items-end sm:justify-between reveal">
        <div><p class="eyebrow">Testimoni</p><h2 id="testi-heading" class="h-section mt-4">Kata mereka yang sudah lolos.</h2></div>
        <div class="flex gap-2">
          <button @click="prev()" class="flex h-11 w-11 items-center justify-center rounded-full border border-ink/15 transition hover:bg-ink hover:text-paper" aria-label="Sebelumnya"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/></svg></button>
          <button @click="next()" class="flex h-11 w-11 items-center justify-center rounded-full border border-ink/15 transition hover:bg-ink hover:text-paper" aria-label="Berikutnya"><svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8"><path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/></svg></button>
        </div>
      </div>
    </div>
    <div class="container-x mt-10">
      <div x-ref="track" class="-mx-5 flex snap-x snap-mandatory gap-6 overflow-x-auto px-5 pb-4 [scrollbar-width:none] sm:-mx-8 sm:px-8 lg:-mx-12 lg:px-12 [&::-webkit-scrollbar]:hidden">
        <!-- Kutipan diambil dari website lama (terpotong "…" di sumber) — lengkapi dari data owner -->
        <figure class="card w-[85%] shrink-0 snap-start p-7 sm:w-[380px]">
          <blockquote class="font-display text-lg leading-relaxed text-ink">“Ga nyesel masuk Villa Merah. Bener-bener dari yang males banget menggambar perspektif dan narasi jadi…”</blockquote>
          <figcaption class="mt-6 flex items-center gap-3"><img src="/assets/img/testi-2.webp" srcset="assets/img/testi-2-sm.webp 320w, assets/img/testi-2.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-12 w-12 rounded-full object-cover"><div><p class="font-semibold">Atira Feodora Munthe</p><p class="text-xs text-ink-4">SMAK Penabur Kota Wisata</p></div></figcaption>
        </figure>
        <figure class="card w-[85%] shrink-0 snap-start p-7 sm:w-[380px]">
          <blockquote class="font-display text-lg leading-relaxed text-ink">“Kesan gw selama belajar di Villa Merah seru banget dan cara kakak-kakak pengajar di sini menyampaikan…”</blockquote>
          <figcaption class="mt-6 flex items-center gap-3"><img src="/assets/img/testi-6.webp" srcset="assets/img/testi-6-sm.webp 320w, assets/img/testi-6.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-12 w-12 rounded-full object-cover"><div><p class="font-semibold">Syauqi</p><p class="text-xs text-ink-4">SMAN 7 Tangerang Selatan</p></div></figcaption>
        </figure>
        <figure class="card w-[85%] shrink-0 snap-start p-7 sm:w-[380px]">
          <blockquote class="font-display text-lg leading-relaxed text-ink">“Villa Merah tempat yang asik buat belajar gambar. Paling komplit fasilitasnya: ada workshop, jalambar…”</blockquote>
          <figcaption class="mt-6 flex items-center gap-3"><img src="/assets/img/testi-1.webp" srcset="assets/img/testi-1-sm.webp 320w, assets/img/testi-1.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-12 w-12 rounded-full object-cover"><div><p class="font-semibold">Anvilia S.</p><p class="text-xs text-ink-4">SMAN 1 Balikpapan</p></div></figcaption>
        </figure>
        <figure class="card w-[85%] shrink-0 snap-start p-7 sm:w-[380px]">
          <blockquote class="font-display text-lg leading-relaxed text-ink">“Pengajar keren-keren dan metode belajarnya asik, seru, serta menyenangkan. Kita diajarkan dari materi…”</blockquote>
          <figcaption class="mt-6 flex items-center gap-3"><img src="/assets/img/testi-5.webp" srcset="assets/img/testi-5-sm.webp 320w, assets/img/testi-5.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-12 w-12 rounded-full object-cover"><div><p class="font-semibold">Awanis Putri</p><p class="text-xs text-ink-4">SMA Negeri 5 Bekasi</p></div></figcaption>
        </figure>
        <figure class="card w-[85%] shrink-0 snap-start p-7 sm:w-[380px]">
          <blockquote class="font-display text-lg leading-relaxed text-ink">“Les di Villa Merah beneran asik dan hasilnya puas, kakaknya dengan sabar ngajarin dari yang bener-bener…”</blockquote>
          <figcaption class="mt-6 flex items-center gap-3"><img src="/assets/img/testi-4.webp" srcset="assets/img/testi-4-sm.webp 320w, assets/img/testi-4.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-12 w-12 rounded-full object-cover"><div><p class="font-semibold">Madeline Natalie</p><p class="text-xs text-ink-4">SMAN 71 Jakarta</p></div></figcaption>
        </figure>
        <figure class="card w-[85%] shrink-0 snap-start p-7 sm:w-[380px]">
          <blockquote class="font-display text-lg leading-relaxed text-ink">“Belajar di Villa Merah itu seru banget, temen-temen dan kakak pengajarnya asik. Diajarin dari konsep…”</blockquote>
          <figcaption class="mt-6 flex items-center gap-3"><img src="/assets/img/testi-3.webp" srcset="assets/img/testi-3-sm.webp 320w, assets/img/testi-3.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-12 w-12 rounded-full object-cover"><div><p class="font-semibold">Sarasvati Sekar</p><p class="text-xs text-ink-4">SMA Negeri 1 Bogor</p></div></figcaption>
        </figure>
        <!-- Video testimoni -->
        <a href="https://www.youtube.com/channel/UCCheW9-S6rzlSC8QUcnrMpA" target="_blank" rel="noopener" class="group relative flex w-[85%] shrink-0 snap-start flex-col justify-end overflow-hidden rounded-2xl bg-ink p-7 text-paper sm:w-[380px]">
          <img src="/assets/img/kegiatan-talkshow.webp" srcset="assets/img/kegiatan-talkshow-sm.webp 320w, assets/img/kegiatan-talkshow.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="500" height="375" loading="lazy" class="absolute inset-0 h-full w-full object-cover opacity-50 transition group-hover:scale-105">
          <div class="relative"><span class="flex h-14 w-14 items-center justify-center rounded-full bg-brand-600"><svg class="ml-1 h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></span><p class="mt-6 font-display text-xl">Tonton video testimoni siswa</p><p class="mt-1 text-sm text-paper/60">YouTube Villa Merah</p></div>
        </a>
      </div>
    </div>
  </section>

  <!-- ============ PROMO ============ -->
  <section class="container-x" aria-labelledby="promo-heading">
    <div class="relative overflow-hidden rounded-3xl bg-brand-600 px-6 py-12 text-paper sm:px-12 lg:px-16 lg:py-16 reveal">
      <div aria-hidden="true" class="pointer-events-none absolute -right-20 -top-20 h-72 w-72 rounded-full bg-paper/10"></div>
      <div aria-hidden="true" class="pointer-events-none absolute -bottom-24 left-1/3 h-64 w-64 rounded-full bg-ink/10"></div>
      <div class="relative grid items-center gap-10 lg:grid-cols-12">
        <div class="lg:col-span-7">
          <span class="chip bg-paper text-brand-700">Promo bulan ini</span>
          <h2 id="promo-heading" class="h-section mt-4 text-paper text-balance">10 pendaftar pertama bulan ini dapat bonus spesial.</h2>
          <ul class="mt-6 grid gap-3 sm:grid-cols-3">
            <li class="rounded-xl bg-paper/10 p-4"><p class="font-display text-2xl">Gratis</p><p class="text-sm text-paper/80">biaya pendaftaran</p></li>
            <li class="rounded-xl bg-paper/10 p-4"><p class="font-display text-2xl">Diskon</p><p class="text-sm text-paper/80">biaya program</p></li>
            <li class="rounded-xl bg-paper/10 p-4"><p class="font-display text-2xl">Bonus</p><p class="text-sm text-paper/80">paket alat gambar</p></li>
          </ul>
        </div>
        <div class="flex flex-col gap-3 lg:col-span-5 lg:items-end">
          <a class='btn-lg btn bg-paper text-brand-700 hover:bg-white hover:shadow-card-lg' href='/daftar'>Daftar Sekarang</a>
          <a href="https://wa.me/6285720070066?text=Halo%2C%20saya%20mau%20tanya%20promo%20pendaftaran%20bulan%20ini." target="_blank" rel="noopener" class="btn-lg btn border border-paper/40 text-paper hover:bg-paper/10">Tanya promo via WA</a>
          <p class="text-xs text-paper/70">Kuota terbatas · berlaku untuk semua program</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ BLOG ============ -->
  <section class="py-20 lg:py-28" aria-labelledby="blog-heading">
    <div class="container-x">
      <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between reveal">
        <div><p class="eyebrow">Blog &amp; Info</p><h2 id="blog-heading" class="h-section mt-4">Panduan SNBP, SNBT, dan jurusan seni.</h2></div>
        <a class='btn-outline' href='/blog'>Semua artikel</a>
      </div>
@endverbatim
@include('site.home-articles')
@verbatim
    </div>
  </section>

  <!-- ============ FAQ ringkas ============ -->
  <section class="bg-paper-2 py-20 lg:py-28" aria-labelledby="faq-heading">
    <div class="container-x grid gap-12 lg:grid-cols-12">
      <div class="lg:col-span-4 reveal">
        <p class="eyebrow">FAQ</p>
        <h2 id="faq-heading" class="h-section mt-4 text-balance">Pertanyaan yang sering ditanyakan.</h2>
        <p class="mt-4 text-ink-3">Belum terjawab? Tanya langsung ke tim kami.</p>
        <div class="mt-6 flex flex-wrap gap-3"><a class='btn-outline' href='/tentang#faq'>FAQ lengkap</a><a href="https://wa.me/6285720070066" target="_blank" rel="noopener" class="btn-wa">WhatsApp</a></div>
      </div>
      <div class="divide-y divide-line lg:col-span-8" x-data="{ open: 0 }">
        <details class="group py-5" open>
          <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink sm:text-xl [&::-webkit-details-marker]:hidden">Saya tidak punya bakat menggambar, apakah bisa masuk FSRD atau Arsitektur?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary>
          <p class="mt-3 max-w-2xl text-ink-3">Bisa. Dengan latihan berkelanjutan dan bimbingan pengajar berpengalaman, kemampuan menggambar dapat dikembangkan hingga cukup untuk lolos seleksi program-program tersebut.</p>
        </details>
        <details class="group py-5">
          <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink sm:text-xl [&::-webkit-details-marker]:hidden">Apakah siswa jurusan IPA bisa ikut seleksi FSRD?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary>
          <p class="mt-3 max-w-2xl text-ink-3">Bisa. Sejak aturan seleksi nasional terbaru tidak ada lagi pemisahan tes Saintek/Soshum, sehingga siswa IPA dapat memilih FSRD tanpa syarat lintas jurusan.</p>
        </details>
        <details class="group py-5">
          <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink sm:text-xl [&::-webkit-details-marker]:hidden">Berapa bobot portofolio dalam kelulusan SNBP?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary>
          <p class="mt-3 max-w-2xl text-ink-3">Untuk program studi seni, portofolio berbobot 50% dan prestasi akademik 50% dalam penentuan kelulusan.</p>
        </details>
        <details class="group py-5">
          <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink sm:text-xl [&::-webkit-details-marker]:hidden">Apakah Villa Merah juga mengajarkan Tes Potensi Skolastik?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary>
          <p class="mt-3 max-w-2xl text-ink-3">Ya. Tersedia video tutorial dan kelas live untuk TPS sebagai pelengkap materi menggambar, termasuk simulasi try out.</p>
        </details>
        <details class="group py-5">
          <summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-display text-lg text-ink sm:text-xl [&::-webkit-details-marker]:hidden">Saya sudah lulus SMA (gap year), masih bisa daftar SNBT?<span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-ink/15 transition group-open:rotate-45"><svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M12 4.5v15m7.5-7.5h-15"/></svg></span></summary>
          <p class="mt-3 max-w-2xl text-ink-3">Bisa, maksimal tiga tahun setelah kelulusan sesuai ketentuan SNPMB. Program Intensif Seleksi Mandiri juga terbuka untuk peserta gap year.</p>
        </details>
      </div>
    </div>
  </section>

  <!-- ============ LOKASI + CTA AKHIR ============ -->
  <section class="py-20 lg:py-28" aria-labelledby="lokasi-heading">
    <div class="container-x">
      <div class="text-center reveal">
        <p class="eyebrow justify-center">Kunjungi studio kami</p>
        <h2 id="lokasi-heading" class="h-section mt-4">Tiga studio, satu standar.</h2>
      </div>
      <div class="mt-12 grid gap-5 md:grid-cols-3">
        <div class="card overflow-hidden reveal">
          <img src="/assets/img/villa-2.webp" srcset="assets/img/villa-2-sm.webp 320w, assets/img/villa-2.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="Studio Villa Merah Bandung" width="400" height="301" loading="lazy" class="aspect-[4/3] w-full object-cover">
          <div class="p-6"><span class="chip-brand">Pusat</span><h3 class="h-card mt-3">Bandung</h3><p class="mt-2 text-sm text-ink-3">Jl. Anggrek No. 49, Bandung</p><div class="mt-4 flex flex-wrap gap-2 text-sm"><a href="tel:+62227102177" class="btn-outline px-4 py-2">(022) 7102177</a><a href="https://maps.google.com/?q=Jl.+Anggrek+No.+49+Bandung" target="_blank" rel="noopener" class="btn-ghost px-4 py-2">Buka peta &rarr;</a></div></div>
        </div>
        <div class="card overflow-hidden reveal">
          <img src="/assets/img/kegiatan-arsitektur.webp" srcset="assets/img/kegiatan-arsitektur-sm.webp 320w, assets/img/kegiatan-arsitektur.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Studio Villa Merah Jakarta Selatan" width="500" height="282" loading="lazy" class="aspect-[4/3] w-full object-cover">
          <div class="p-6"><span class="chip">Cabang</span><h3 class="h-card mt-3">Jakarta Selatan</h3><p class="mt-2 text-sm text-ink-3">Jl. Gandaria 1 No. 9A, Kebayoran Baru</p><div class="mt-4 flex flex-wrap gap-2 text-sm"><a href="tel:+62217246725" class="btn-outline px-4 py-2">(021) 7246725</a><a href="https://maps.google.com/?q=Jl.+Gandaria+1+No.+9A+Kebayoran+Baru" target="_blank" rel="noopener" class="btn-ghost px-4 py-2">Buka peta &rarr;</a></div></div>
        </div>
        <div class="card overflow-hidden reveal">
          <img src="/assets/img/kegiatan-workshop-maket.webp" srcset="assets/img/kegiatan-workshop-maket-sm.webp 320w, assets/img/kegiatan-workshop-maket.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Studio Villa Merah Jakarta Pusat" width="500" height="375" loading="lazy" class="aspect-[4/3] w-full object-cover">
          <div class="p-6"><span class="chip">Cabang</span><h3 class="h-card mt-3">Jakarta Pusat</h3><p class="mt-2 text-sm text-ink-3">Jl. Cemp. Putih Tengah I No. 35</p><div class="mt-4 flex flex-wrap gap-2 text-sm"><a href="tel:+622129621989" class="btn-outline px-4 py-2">(021) 29621989</a><a href="https://maps.google.com/?q=Jl.+Cempaka+Putih+Tengah+I+No.35+Jakarta+Pusat" target="_blank" rel="noopener" class="btn-ghost px-4 py-2">Buka peta &rarr;</a></div></div>
        </div>
      </div>

      <div class="mt-16 rounded-3xl bg-grid-paper p-8 text-center ring-1 ring-line sm:p-14 reveal">
        <h2 class="h-section text-balance">Mulai dari coretan pertama, <span class="mark-brush-red mark-brush">hari ini.</span></h2>
        <p class="lead mx-auto mt-4 max-w-xl">Konsultasi gratis untuk menentukan program dan jalur seleksi yang paling cocok.</p>
        <div class="mt-8 flex flex-wrap justify-center gap-3"><a class='btn-primary btn-lg' href='/daftar'>Daftar Sekarang</a><a href="https://wa.me/6285720070066" target="_blank" rel="noopener" class="btn-wa btn-lg">Chat WhatsApp</a></div>
        <p class="mt-5 text-xs text-ink-4">Layanan Senin–Minggu, 10.00–17.00 WIB</p>
      </div>
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
