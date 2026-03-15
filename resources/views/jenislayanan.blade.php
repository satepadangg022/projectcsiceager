@extends('layouts.temp')

@section('title')
Jenis Layanan | CSIC
@endsection

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

<style>
  .page-hero { padding: 80px 0 64px; position: relative; overflow: hidden; background: var(--deep); }
  .page-hero-inner { text-align: center; }
  .page-breadcrumb { display: flex; align-items: center; justify-content: center; gap: 8px; color: var(--muted); font-size: .85rem; margin-top: 16px; }
  .page-breadcrumb a { color: var(--cyan); transition: opacity .2s; }
  .page-breadcrumb a:hover { opacity: .75; }
  .page-breadcrumb iconify-icon { font-size: 11px; }
</style>

{{-- ═══ PAGE HEADER ═══ --}}
<section class="page-hero grid-bg">
  <div class="orb orb-hero-r"></div>
  <div class="wrap">
    <div class="page-hero-inner">
      <div class="section-tag section-tag-center">Apa yang Kami Lakukan</div>
      <h1 class="h2 display">Jenis <span class="grad">Layanan</span></h1>
      <nav class="page-breadcrumb">
        <a href="/">Home</a>
        <iconify-icon icon="ph:caret-right-bold"></iconify-icon>
        <span>Layanan</span>
        <iconify-icon icon="ph:caret-right-bold"></iconify-icon>
        <span>Jenis Layanan</span>
      </nav>
    </div>
  </div>
</section>

{{-- ═══ LAYANAN ═══ --}}
<section class="section-dark">
  <div class="wrap">

    <div class="section-header reveal">
      <div class="section-tag section-tag-center">Apa yang Kami Lakukan</div>
      <h2 class="h2 display">Layanan <span class="grad">Utama CSIRT</span></h2>
      <p class="section-desc">Kami menyediakan lima layanan inti untuk memastikan keamanan ekosistem digital secara menyeluruh.</p>
    </div>

    <div class="layanan-grid">

      <div class="layanan-card reveal">
        <div class="l-icon"><iconify-icon icon="ph:bell-ringing-bold"></iconify-icon></div>
        <h4 class="card-heading">a. Pemberian Peringatan Terkait Keamanan Siber</h4>
        <p class="card-text">Layanan ini dilaksanakan oleh CSIRT berupa pemberian peringatan adanya insiden siber kepada pemilik sistem elektronik.</p>
      </div>

      <div class="layanan-card reveal delay-1">
        <div class="l-icon"><iconify-icon icon="ph:shield-plus-bold"></iconify-icon></div>
        <h4 class="card-heading">b. Penanganan Insiden Siber</h4>
        <p class="card-text">Layanan ini diberikan berupa kegiatan penanganan dan pemulihan Insiden Siber secara cepat dan terstruktur.</p>
      </div>

      <div class="layanan-card reveal delay-2">
        <div class="l-icon"><iconify-icon icon="ion:git-network"></iconify-icon></div>
        <h4 class="card-heading">c. Koordinasi Insiden Siber</h4>
        <p class="card-text">Mengkoordinasikan insiden dengan konstituen, menentukan kemungkinan penyebab insiden, dan memberikan rekomendasi penanggulangan.</p>
      </div>

      <div class="widget-span reveal delay-3">
        <div class="widget-box">
          <div class="widget-icon-wrap">
            <div class="widget-ring-1"></div>
            <div class="widget-ring-2"></div>
            <div class="widget-icon-core">
              <iconify-icon icon="mdi:shield-check" style="color:#2979ff;font-size:44px;filter:drop-shadow(0 0 16px rgba(41,121,255,.6));"></iconify-icon>
            </div>
          </div>
          <div class="widget-text-center">
            <p class="widget-title">5 Layanan Inti</p>
            <p class="widget-subtitle">Perlindungan komprehensif untuk ekosistem digital Anda</p>
          </div>
          <div class="widget-stats">
            <div class="widget-stat">
              <p class="widget-stat-num">24/7</p>
              <p class="widget-stat-label">Monitoring</p>
            </div>
            <div class="widget-stat">
              <p class="widget-stat-num">&lt;2h</p>
              <p class="widget-stat-label">Respons</p>
            </div>
          </div>
        </div>
      </div>

      <div class="layanan-card reveal">
        <div class="l-icon"><iconify-icon icon="mdi:radar"></iconify-icon></div>
        <h4 class="card-heading">d. Pendeteksian Serangan</h4>
        <p class="card-text">Tim CSIRT memiliki beberapa sistem untuk mendeteksi apakah sistem pada perusahaan bersangkutan aman atau memiliki risiko.</p>
      </div>

      <div class="layanan-card layanan-e reveal delay-1">
        <div class="l-icon"><iconify-icon icon="ph:megaphone-bold"></iconify-icon></div>
        <h4 class="card-heading">e. Pembangunan Kesadaran Dan Kepedulian Terhadap Keamanan Siber</h4>
        <p class="card-text">Tim CSIRT melakukan sosialisasi mengenai isu sistem keamanan informasi kepada seluruh stakeholder guna meningkatkan kewaspadaan dan budaya keamanan siber di lingkungan PT. Indonesia.</p>
      </div>

    </div>
  </div>
</section>

<script>
const io = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('on'); io.unobserve(e.target); } });
}, { threshold: 0.08 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));
</script>

@endsection
