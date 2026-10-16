@verbatim
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
@endverbatim