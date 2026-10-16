<!doctype html>
<html lang="id"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1"><meta name="robots" content="noindex,nofollow"><title>@yield('title', 'Dashboard') · Villa Merah Admin</title><link rel="icon" href="/assets/img/logo-icon.png"><link rel="preconnect" href="https://fonts.googleapis.com"><link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;500;600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"><link rel="stylesheet" href="/css/admin.css"><script defer src="/js/alpine.min.js"></script></head>
<body x-data="{ menuOpen: false }" @keydown.escape.window="menuOpen = false">
<button class="sidebar-overlay" x-show="menuOpen" x-cloak @click="menuOpen = false" aria-label="Tutup navigasi"></button>
<aside class="sidebar" :class="{ 'is-open': menuOpen }"><a class="brand" href="{{ route('admin.dashboard') }}"><img src="/assets/img/logo.png" alt="" width="40" height="40"><span>Villa <em>Merah</em><small>ADMINISTRATION</small></span></a>
<div class="workspace"><span class="workspace-icon">VM</span><div><strong>Villa Merah</strong><small>Ruang kerja admin</small></div><span class="online-dot" title="Aktif"></span></div>
<p class="nav-label">MENU UTAMA</p><nav aria-label="Navigasi admin">
@foreach([['admin.dashboard','dashboard','Dashboard'],['admin.registrations.index','users','Pendaftaran'],['admin.programs.index','book','Program Belajar']] as [$route,$icon,$label])
<a href="{{ route($route) }}" class="nav-item {{ request()->routeIs($route === 'admin.programs.index' ? 'admin.programs.*' : ($route === 'admin.registrations.index' ? 'admin.registrations.*' : $route)) ? 'active' : '' }}">@include('admin.icon',['icon'=>$icon])<span>{{ $label }}</span></a>
@endforeach
<p class="nav-label">PREFERENSI</p><a class="nav-item {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}" href="{{ route('admin.settings.edit') }}">@include('admin.icon',['icon'=>'settings'])<span>Pengaturan Akun</span></a>
<a class="nav-item" href="{{ route('home') }}" target="_blank" rel="noopener">@include('admin.icon',['icon'=>'external'])<span>Lihat Website</span></a></nav>
<div class="sidebar-bottom"><div class="sidebar-note"><span class="tiny-label">SEJAK 1992</span><p>Tempat coretan kecil<br>menjadi mimpi besar.</p><span class="note-line"></span></div><div class="account"><span class="avatar">{{ mb_substr(auth()->user()->name,0,1) }}</span><div><strong>{{ auth()->user()->name }}</strong><small>Administrator</small></div><form method="post" action="{{ route('admin.logout') }}">@csrf<button class="icon-button" title="Keluar" aria-label="Keluar">@include('admin.icon',['icon'=>'logout'])</button></form></div></div>
</aside>
<div class="app-shell"><header class="topbar"><div class="breadcrumb"><button class="icon-button mobile-toggle" @click="menuOpen = !menuOpen" aria-label="Buka navigasi" :aria-expanded="menuOpen">@include('admin.icon',['icon'=>'menu'])</button><span>Workspace</span><span>/</span><strong>@yield('title', 'Dashboard')</strong></div><div class="top-actions"><form class="top-search" action="{{ route('admin.registrations.index') }}">@include('admin.icon',['icon'=>'search'])<input name="q" placeholder="Cari pendaftar…" aria-label="Cari pendaftar"></form><span class="top-divider"></span><a class="avatar small" href="{{ route('admin.settings.edit') }}" aria-label="Pengaturan akun">{{ mb_substr(auth()->user()->name,0,1) }}</a></div></header>
<main class="main-content">
@if(session('success'))<div class="notice success" role="status">@include('admin.icon',['icon'=>'check']) {{ session('success') }}</div>@endif
@if($errors->any())<div class="notice error" role="alert"><strong>Periksa kembali data Anda.</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
@yield('content')
<footer class="admin-footer"><span>© {{ now()->year }} Villa Merah. Semua hak dilindungi.</span><span>Dirancang untuk tumbuh bersama.</span></footer></main></div>
</body></html>
