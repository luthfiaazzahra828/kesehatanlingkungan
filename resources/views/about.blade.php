@extends('layout')
@section('content')
<div id="about">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-6">
                <img src="{{ asset('foto/bg.webp') }}" class="img-fluid" alt="Environmental Health">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="p-5">
                    <h1 class="display-4 text-hitam" data-aos="fade-down" data-aos-delay="300">Tentang Kami</h1>
                    <p class="lead" data-aos="fade-down" data-aos-delay="500">
                        Kami adalah tim yang berdedikasi untuk meningkatkan kesehatan lingkungan dan kualitas hidup masyarakat.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container marketing mt-5">
        <div class="row featurette">
            <div class="col-md-12">
                <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down" data-aos-delay="300">
                    <b>Misi Kami</b>
                </h2>
                <p class="lead" data-aos="fade-down" data-aos-delay="500">
                    Mempromosikan lingkungan yang sehat dan berkelanjutan melalui edukasi, penelitian, dan aksi nyata.
                </p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-left" data-aos-delay="300">
                    <b>Fokus Kami</b>
                </h2>
                <ul class="lead" data-aos="fade-left" data-aos-delay="500">
                    <li>Kualitas Air dan Sanitasi</li>
                    <li>Polusi Udara dan Perubahan Iklim</li>
                    <li>Pengelolaan Limbah</li>
                    <li>Kesehatan Perkotaan</li>
                    <li>Keamanan Pangan</li>
                </ul>
            </div>
            <div class="col-md-5 order-md-1">
                <img src="{{ asset('foto/bgg.webp') }}" class="img-fluid" alt="Environmental Focus">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-right" data-aos-delay="300">
                    <b>Tim Kami</b>
                </h2>
                <p class="lead" data-aos="fade-right" data-aos-delay="500">
                    Tim kami terdiri dari para ahli di bidang kesehatan lingkungan, termasuk peneliti, praktisi kesehatan masyarakat,
                    ahli lingkungan, dan pendidik. Bersama-sama, kami bekerja untuk menciptakan solusi inovatif
                    untuk tantangan kesehatan lingkungan saat ini.
                </p>
            </div>
            <div class="col-md-5">
                <img src="{{ asset('foto/profil.webp') }}" class="img-fluid" alt="Our Team">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-up" data-aos-delay="300">
                    <b>Bergabunglah dengan Kami</b>
                </h2>
                <p class="lead" data-aos="fade-up" data-aos-delay="500">
                    Bersama-sama, kita dapat menciptakan lingkungan yang lebih sehat untuk generasi mendatang.
                </p>
                <a href="#contact" class="btn btn-primary btn-lg" data-aos="fade-up" data-aos-delay="700">Hubungi Kami</a>
            </div>
        </div>
    </div>

    <div style="padding-top: 100px;"></div>
</div>
@endsection
