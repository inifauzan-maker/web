/* Villa Merah — interaksi ringan (dipakai ulang di Tahap 2 lewat Vite) */
// ?noreveal mematikan animasi reveal (untuk screenshot/Lighthouse)
if (!location.search.includes('noreveal')) document.documentElement.classList.add('js');

// Reveal on scroll — aman untuk prefers-reduced-motion (CSS mematikan transisi)
const io = new IntersectionObserver((entries) => {
  entries.forEach((e) => {
    if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
  });
}, { rootMargin: '0px 0px -10% 0px', threshold: 0.1 });
document.querySelectorAll('.reveal').forEach((el) => io.observe(el));

// Alpine stores/komponen
document.addEventListener('alpine:init', () => {
  // Navbar: state scroll + menu mobile
  Alpine.data('navbar', () => ({
    open: false,
    scrolled: window.scrollY > 24,
    init() {
      window.addEventListener('scroll', () => { this.scrolled = window.scrollY > 24; }, { passive: true });
      this.$watch('open', (v) => { document.body.style.overflow = v ? 'hidden' : ''; });
    },
  }));

  // Carousel horizontal sederhana (scroll-snap) — testimoni, blog
  Alpine.data('carousel', () => ({
    index: 0,
    count: 0,
    init() {
      this.count = this.$refs.track.children.length;
      this.$refs.track.addEventListener('scroll', () => {
        const w = this.$refs.track.firstElementChild.offsetWidth + 24;
        this.index = Math.round(this.$refs.track.scrollLeft / w);
      }, { passive: true });
    },
    go(i) {
      const w = this.$refs.track.firstElementChild.offsetWidth + 24;
      this.$refs.track.scrollTo({ left: i * w, behavior: 'smooth' });
    },
    next() { this.go(Math.min(this.index + 1, this.count - 1)); },
    prev() { this.go(Math.max(this.index - 1, 0)); },
  }));

  // Lightbox galeri
  Alpine.data('lightbox', () => ({
    openIdx: null,
    items: [],
    init() {
      this.items = [...this.$root.querySelectorAll('[data-lightbox]')].map((el) => ({
        src: el.dataset.lightbox, alt: el.querySelector('img')?.alt || '', caption: el.dataset.caption || '',
      }));
      this.$root.querySelectorAll('[data-lightbox]').forEach((el, i) => el.addEventListener('click', (e) => { e.preventDefault(); this.openIdx = i; }));
      window.addEventListener('keydown', (e) => {
        if (this.openIdx === null) return;
        if (e.key === 'Escape') this.openIdx = null;
        if (e.key === 'ArrowRight') this.next();
        if (e.key === 'ArrowLeft') this.prev();
      });
    },
    next() { this.openIdx = (this.openIdx + 1) % this.items.length; },
    prev() { this.openIdx = (this.openIdx - 1 + this.items.length) % this.items.length; },
  }));
});
