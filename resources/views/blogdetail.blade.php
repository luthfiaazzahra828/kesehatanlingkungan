@extends('layout')
@section('content')
<div id="home">
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-indicators" id="home">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img width="100%" style="opacity: 0.5;"
                        src="foto/bg.webp">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="font-size: 50px;" class="gaya-font text-dark">Selamat Datang</h1>
                            <br>
                            <p class="text-dark" style="font-size: 30px;"><b>Website Kesehatan Lingkungan</b>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img width="100%" style="opacity: 0.5;"
                        src="foto/bgg.webp">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1 style="font-size: 50px;" class="gaya-font text-dark">Kesehatan Lingkungan</h1>
                            <br>
                            <p style="font-size: 30px;" class="text-dark"><b>Menggabungkan Ilmu Kesehatan dan Lingkungan</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Blog -->
    <div class="container marketing" id="blog">
        <div class="row featurette">
            <div class="col-md-12">
                <center>
                    <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down"
                        data-aos-delay="500">
                        <b>Blog</b>
                    </h2>
                </center>
                <br>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <!-- judul -->
                    <div class="col-md-12">
                        <h2 class="featurette
                            heading fw-normal lh-1 text-hitam" data-aos="fade-down" data-aos-delay="500">
                            <b>{{ $row->judul }}</b>
                        </h2>

                        <p class="text-muted
                            text-muted" data-aos="fade-down" data-aos-delay="500">
                            {{ tanggal($row->created_at) }}
                        </p>

                        <img src="{{ asset('blog/' . $row->foto) }}" class="img-fluid" alt="Responsive image"
                            data-aos="fade-down" data-aos-delay="500">

                        <p class="text-muted
                            text-muted" data-aos="fade-down" data-aos-delay="500">
                            {!! $row->deskripsi !!}
                        </p>

                        <a href="{{ url('/blogs') }}" class="btn btn-primary">Kembali</a>

                    </div>
                    <!-- end judul -->
                     <!-- end detail blog -->
                </div>
            </div>
        </div>
    </div>

    <div style="padding-top: 100px;"></div>
@endsection
