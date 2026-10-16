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
<body class="overflow-x-hidden has-sticky-cta">
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

  <!-- Hero program -->
  <section class="bg-grid-paper">
    <div class="container-x grid gap-10 py-12 lg:grid-cols-12 lg:py-16">
      <div class="lg:col-span-7">
        <nav aria-label="Breadcrumb" class="text-xs text-ink-4"><ol class="flex flex-wrap gap-2"><li><a class='hover:text-ink' href='/'>Beranda</a></li><li aria-hidden="true">/</li><li><a class='hover:text-ink' href='/program-index'>Program</a></li><li aria-hidden="true">/</li><li aria-current="page" class="text-ink">Intensif SNBT Seni Rupa &amp; Desain</li></ol></nav>
        <div class="mt-6 flex flex-wrap gap-2"><span class="chip-brand">Seni Rupa &amp; Desain</span><span class="chip">Kelas XII</span><span class="chip">Offline / Online</span><span class="chip">Angkatan 2026</span></div>
        <h1 class="h-display mt-5 text-balance">@endverbatim
@if(filled($pageContent?->heading)){{ $pageContent->heading }}@else
@verbatimIntensif SNBT Seni Rupa &amp; Desain@endverbatim
@endif
@verbatim</h1>
        <p class="lead mt-5 max-w-2xl text-pretty">@endverbatim
@if(filled($pageContent?->intro)){{ $pageContent->intro }}@else
@verbatimProgram khusus kelas XII untuk menembus FSRD ITB dan program studi seni/desain PTN lainnya lewat jalur SNBT: UTBK terlatih, portofolio tersusun, mental siap.@endverbatim
@endif
@verbatim</p>
        <div class="mt-8 flex flex-wrap gap-3"><a class='btn-primary btn-lg' href='/daftar'>Daftar Program Ini</a><a href="https://wa.me/6285720070066?text=Halo%2C%20saya%20ingin%20tanya%20program%20Intensif%20SNBT%20Seni%20Rupa%20%26%20Desain." target="_blank" rel="noopener" class="btn-outline btn-lg">Tanya via WhatsApp</a></div>
      </div>
      <!-- Ringkasan sticky -->
      <aside class="lg:col-span-5">
        <div class="card overflow-hidden lg:sticky lg:top-24">
          <img src="/assets/img/kegiatan-still-life.webp" srcset="assets/img/kegiatan-still-life-sm.webp 320w, assets/img/kegiatan-still-life.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Suasana kelas Intensif SNBT — latihan menggambar still life" width="500" height="500" class="aspect-[16/10] w-full object-cover" fetchpriority="high">
          <div class="p-6">
            <div class="flex items-baseline justify-between"><p class="text-sm text-ink-4">Biaya program</p><p class="font-display text-3xl">Rp 9.000.000</p></div>
            <p class="mt-1 text-xs text-ink-4">Bisa dicicil 2× · gratis biaya pendaftaran bulan ini</p>
            <dl class="mt-5 divide-y divide-line text-sm">
              <div class="flex justify-between py-2.5"><dt class="text-ink-4">Durasi</dt><dd class="font-semibold">± 6 bulan (Jan–Jun)</dd></div>
              <div class="flex justify-between py-2.5"><dt class="text-ink-4">Jadwal</dt><dd class="font-semibold">3× / minggu, 2 jam</dd></div>
              <div class="flex justify-between py-2.5"><dt class="text-ink-4">Lokasi</dt><dd class="font-semibold">Bandung · Jakarta · Online</dd></div>
              <div class="flex justify-between py-2.5"><dt class="text-ink-4">Kelas</dt><dd class="font-semibold">Maks. 12 siswa</dd></div>
              <div class="flex justify-between py-2.5"><dt class="text-ink-4">Mulai</dt><dd class="font-semibold">Januari 2026</dd></div>
            </dl>
            <a class='btn-primary mt-5 w-full' href='/daftar'>Daftar Sekarang</a>
            <p class="mt-3 text-center text-xs text-ink-4">Kuota terbatas per angkatan</p>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <div class="container-x grid gap-16 py-16 lg:grid-cols-12 lg:py-20">
    <div class="space-y-16 lg:col-span-7">

      <!-- Untuk siapa -->
      <section aria-labelledby="untuk-heading">
        <p class="eyebrow">Untuk siapa</p>
        <h2 id="untuk-heading" class="h-section mt-3">Cocok jika kamu…</h2>
        <ul class="mt-6 grid gap-3 sm:grid-cols-2">
          <li class="flex gap-3 rounded-xl bg-white p-4 ring-1 ring-line"><svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg><span class="text-sm">Siswa kelas XII yang menargetkan FSRD ITB, ISI, UNPAD, atau prodi seni/desain lain lewat SNBT.</span></li>
          <li class="flex gap-3 rounded-xl bg-white p-4 ring-1 ring-line"><svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg><span class="text-sm">Tidak eligible SNBP atau ingin jalur cadangan yang kuat.</span></li>
          <li class="flex gap-3 rounded-xl bg-white p-4 ring-1 ring-line"><svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg><span class="text-sm">Merasa belum berbakat menggambar — kami mulai dari dasar.</span></li>
          <li class="flex gap-3 rounded-xl bg-white p-4 ring-1 ring-line"><svg class="mt-0.5 h-5 w-5 shrink-0 text-brand-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2"><path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/></svg><span class="text-sm">Jurusan IPA maupun IPS — tidak ada syarat lintas jurusan.</span></li>
        </ul>
      </section>

      <!-- Kurikulum -->
      <section aria-labelledby="kurikulum-heading">
        <p class="eyebrow">Kurikulum</p>
        <h2 id="kurikulum-heading" class="h-section mt-3">Apa yang dipelajari</h2>
        <p class="mt-4 text-ink-3">Disusun mengikuti kriteria penilaian portofolio SNPMB terbaru dan struktur UTBK. Setiap modul diakhiri review karya personal.</p>
        <ol class="mt-8 space-y-4">
          <li class="flex gap-5"><span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ink font-display text-paper">1</span><div><h3 class="font-semibold">Dasar menggambar &amp; perspektif</h3><p class="mt-1 text-sm text-ink-3">Garis, proporsi, gelap-terang, perspektif 1–3 titik, anatomi dasar manusia dan objek.</p></div></li>
          <li class="flex gap-5"><span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ink font-display text-paper">2</span><div><h3 class="font-semibold">Gambar naratif</h3><p class="mt-1 text-sm text-ink-3">Menyusun cerita visual hubungan manusia–lingkungan dengan konteks lengkap — format wajib portofolio FSRD.</p></div></li>
          <li class="flex gap-5"><span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ink font-display text-paper">3</span><div><h3 class="font-semibold">Gambar komposisi &amp; warna</h3><p class="mt-1 text-sm text-ink-3">Komposisi bidang, ritme, keseimbangan, teori warna, media cat air dan pensil warna.</p></div></li>
          <li class="flex gap-5"><span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ink font-display text-paper">4</span><div><h3 class="font-semibold">Karya bebas / karya terbaik</h3><p class="mt-1 text-sm text-ink-3">Potret, lukisan, ilustrasi — membangun 3–5 karya unggulan dengan berbagai media.</p></div></li>
          <li class="flex gap-5"><span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ink font-display text-paper">5</span><div><h3 class="font-semibold">Tes Potensi Skolastik (UTBK)</h3><p class="mt-1 text-sm text-ink-3">Penalaran umum, pengetahuan kuantitatif, pemahaman bacaan &amp; menulis, literasi — plus 4× try out.</p></div></li>
          <li class="flex gap-5"><span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-ink font-display text-paper">6</span><div><h3 class="font-semibold">Finalisasi portofolio &amp; pendaftaran</h3><p class="mt-1 text-sm text-ink-3">Kurasi karya, dokumentasi foto, penulisan deskripsi, dan VIP guidance pengunggahan ke portal SNPMB.</p></div></li>
        </ol>
      </section>

      <!-- Fasilitas -->
      <section aria-labelledby="fasilitas-heading">
        <p class="eyebrow">Fasilitas</p>
        <h2 id="fasilitas-heading" class="h-section mt-3">Yang kamu dapatkan</h2>
        <ul class="mt-6 grid gap-x-8 gap-y-3 text-sm sm:grid-cols-2">
          <li class="flex gap-2"><span class="text-brand-600">✓</span> Modul cetak + akses video tutorial eksklusif 24/7</li>
          <li class="flex gap-2"><span class="text-brand-600">✓</span> Review karya personal setiap pertemuan</li>
          <li class="flex gap-2"><span class="text-brand-600">✓</span> 4× try out UTBK + pembahasan</li>
          <li class="flex gap-2"><span class="text-brand-600">✓</span> Personal online counseling pemilihan prodi</li>
          <li class="flex gap-2"><span class="text-brand-600">✓</span> Workshop (cat air, maket, ebru) &amp; kunjungan galeri</li>
          <li class="flex gap-2"><span class="text-brand-600">✓</span> Studio bebas pakai di luar jam kelas</li>
          <li class="flex gap-2"><span class="text-brand-600">✓</span> Grup diskusi alumni &amp; pengajar</li>
          <li class="flex gap-2"><span class="text-brand-600">✓</span> Sertifikat penyelesaian program</li>
        </ul>
      </section>

      <!-- Paket / varian -->
      <section aria-labelledby="paket-heading">
        <p class="eyebrow">Pilihan paket</p>
        <h2 id="paket-heading" class="h-section mt-3">Sesuaikan dengan kebutuhan</h2>
        <div class="mt-6 grid gap-4 sm:grid-cols-2">
          <div class="card p-6 ring-2 ring-brand-600"><div class="flex items-center justify-between"><h3 class="font-display text-xl">Intensif SNBT 2026</h3><span class="chip-brand">Pilihan ini</span></div><p class="mt-2 text-sm text-ink-3">Fokus penuh jalur SNBT: UTBK + portofolio.</p><p class="mt-4 font-display text-2xl">Rp 9.000.000</p><a class='btn-primary mt-4 w-full' href='/daftar'>Daftar</a></div>
          <div class="card p-6"><div class="flex items-center justify-between"><h3 class="font-display text-xl">Intensif SNBP + SNBT 2026</h3><span class="chip-ochre">Hemat</span></div><p class="mt-2 text-sm text-ink-3">Mulai lebih awal untuk SNBP, lanjut SNBT tanpa jeda.</p><p class="mt-4 font-display text-2xl">Hubungi kami</p><a href="https://wa.me/6285720070066?text=Halo%2C%20saya%20ingin%20tanya%20paket%20Intensif%20SNBP%20%2B%20SNBT%202026." target="_blank" rel="noopener" class="btn-outline mt-4 w-full">Tanya harga</a></div>
        </div>
      </section>

      <!-- FAQ program -->
      <section aria-labelledby="faqp-heading">
        <p class="eyebrow">FAQ program</p>
        <h2 id="faqp-heading" class="h-section mt-3">Pertanyaan umum</h2>
        <div class="mt-6 divide-y divide-line">
          <details class="group py-4" open><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold [&::-webkit-details-marker]:hidden">Apakah program ini juga mencakup Tes Potensi Skolastik?<span class="text-ink-4 transition group-open:rotate-45">+</span></summary><p class="mt-2 text-sm text-ink-3">Ya. Selain menggambar, tersedia kelas live dan video tutorial TPS serta simulasi try out.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold [&::-webkit-details-marker]:hidden">Bisa pindah dari offline ke online di tengah program?<span class="text-ink-4 transition group-open:rotate-45">+</span></summary><p class="mt-2 text-sm text-ink-3">Bisa, koordinasikan dengan admin. Materi dan review karya tetap berjalan tanpa terputus.</p></details>
          <details class="group py-4"><summary class="flex cursor-pointer list-none items-center justify-between gap-4 font-semibold [&::-webkit-details-marker]:hidden">Apakah alat gambar disediakan?<span class="text-ink-4 transition group-open:rotate-45">+</span></summary><p class="mt-2 text-sm text-ink-3">Alat dasar tersedia di studio. Untuk latihan di rumah, kami berikan daftar alat yang direkomendasikan (bonus paket alat untuk promo pendaftar pertama).</p></details>
        </div>
      </section>
    </div>

    <!-- Sidebar kanan: pengajar + testimoni + galeri -->
    <div class="space-y-8 lg:col-span-5 lg:pl-8">
      <div class="card p-6">
        <p class="eyebrow">Pengajar</p>
        <ul class="mt-4 space-y-4">
          <!-- TODO(owner): data pengajar resmi -->
          <li class="flex items-center gap-4"><span class="h-12 w-12 shrink-0 rounded-full bg-paper-3"></span><div><p class="font-semibold">Nama Pengajar</p><p class="text-xs text-ink-4">Alumni FSRD ITB · 15 th mengajar</p></div></li>
          <li class="flex items-center gap-4"><span class="h-12 w-12 shrink-0 rounded-full bg-paper-3"></span><div><p class="font-semibold">Nama Pengajar</p><p class="text-xs text-ink-4">Alumni DKV ITB · ilustrator</p></div></li>
          <li class="flex items-center gap-4"><span class="h-12 w-12 shrink-0 rounded-full bg-paper-3"></span><div><p class="font-semibold">Nama Pengajar</p><p class="text-xs text-ink-4">Tutor TPS · lulusan UI</p></div></li>
        </ul>
      </div>
      <figure class="rounded-2xl bg-ink p-6 text-paper">
        <blockquote class="font-display text-lg leading-relaxed">“Ga nyesel masuk Villa Merah. Bener-bener dari yang males banget menggambar perspektif dan narasi jadi…”</blockquote>
        <figcaption class="mt-5 flex items-center gap-3"><img src="/assets/img/testi-2.webp" srcset="assets/img/testi-2-sm.webp 320w, assets/img/testi-2.webp 400w" sizes="(max-width: 640px) 90vw, 480px" alt="" width="400" height="400" loading="lazy" class="h-10 w-10 rounded-full object-cover"><div><p class="text-sm font-semibold">Atira Feodora Munthe</p><p class="text-xs text-paper/60">SMAK Penabur Kota Wisata · alumni Intensif SNBT</p></div></figcaption>
      </figure>
      <div>
        <p class="eyebrow">Karya alumni program ini</p>
        <div class="mt-4 grid grid-cols-2 gap-3">
          <a class='frame' href='/galeri'><img src="/assets/img/karya-2.webp" srcset="assets/img/karya-2-sm.webp 320w, assets/img/karya-2.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya alumni: gambar naratif" width="500" height="371" loading="lazy" class="aspect-[4/3]"></a>
          <a class='frame' href='/galeri'><img src="/assets/img/karya-9.webp" srcset="assets/img/karya-9-sm.webp 320w, assets/img/karya-9.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya alumni: gambar naratif" width="500" height="352" loading="lazy" class="aspect-[4/3]"></a>
          <a class='frame' href='/galeri'><img src="/assets/img/karya-10.webp" srcset="assets/img/karya-10-sm.webp 320w, assets/img/karya-10.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya alumni: gambar naratif" width="500" height="351" loading="lazy" class="aspect-[4/3]"></a>
          <a class='frame' href='/galeri'><img src="/assets/img/karya-11.webp" srcset="assets/img/karya-11-sm.webp 320w, assets/img/karya-11.webp 500w" sizes="(max-width: 640px) 90vw, 480px" alt="Karya alumni: gambar komposisi" width="500" height="330" loading="lazy" class="aspect-[4/3]"></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Program lain -->
  <section class="bg-paper-2 py-16" aria-labelledby="lain-heading">
    <div class="container-x">
      <div class="flex items-end justify-between gap-4"><h2 id="lain-heading" class="h-section">Program terkait</h2><a class='btn-outline' href='/program-index'>Semua program</a></div>
      <div class="mt-8 grid gap-5 md:grid-cols-3">
        <a class='card group p-6 transition hover:-translate-y-1 hover:shadow-card-lg' href='/program'><span class="chip">Kelas XII</span><h3 class="h-card mt-3 group-hover:text-brand-700">Intensif SNBP Seni Rupa &amp; Desain</h3><p class="mt-2 text-sm text-ink-3">Fokus portofolio untuk jalur prestasi.</p></a>
        <a class='card group p-6 transition hover:-translate-y-1 hover:shadow-card-lg' href='/program'><span class="chip">Kelas XII / Gap year</span><h3 class="h-card mt-3 group-hover:text-brand-700">Intensif Seleksi Mandiri</h3><p class="mt-2 text-sm text-ink-3">Persiapan ujian gambar langsung PTN/PTS.</p></a>
        <a class='card group p-6 transition hover:-translate-y-1 hover:shadow-card-lg' href='/program'><span class="chip">Online</span><h3 class="h-card mt-3 group-hover:text-brand-700">Intensif Online Seni Rupa &amp; Desain</h3><p class="mt-2 text-sm text-ink-3">Materi sama, dari kota mana pun.</p></a>
      </div>
    </div>
  </section>

  <!-- CTA mobile sticky -->
  <div class="fixed inset-x-0 bottom-0 z-30 flex gap-3 border-t border-line bg-paper/95 p-3 backdrop-blur lg:hidden" style="padding-bottom:calc(0.75rem + env(safe-area-inset-bottom))">
    <div class="flex-1"><p class="text-[11px] text-ink-4">Intensif SNBT 2026</p><p class="font-display text-lg leading-tight">Rp 9.000.000</p></div>
    <a href="https://wa.me/6285720070066?text=Halo%2C%20saya%20ingin%20tanya%20program%20Intensif%20SNBT." target="_blank" rel="noopener" class="btn-wa px-4" aria-label="Tanya via WhatsApp"><svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2z"/></svg></a>
    <a class='btn-primary' href='/daftar'>Daftar</a>
  </div>
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
