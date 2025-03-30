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


    <div class="container marketing" id="about">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down" data-aos-delay="500">
                    <b>Tentang</b>
                </h2>
                <!-- <br> -->
                <!-- <h1>Tentang Kesehatan Lingkungan</h1> -->
                        <p>Kesehatan lingkungan adalah aspek penting dalam menjaga kesejahteraan manusia dan ekosistem di sekitarnya. Lingkungan yang bersih dan sehat berkontribusi besar dalam mencegah penyakit dan meningkatkan kualitas hidup.</p>

                        <h2>Mengapa Kesehatan Lingkungan Penting?</h2>
                        <p>Lingkungan yang tercemar dapat menjadi sumber berbagai penyakit seperti gangguan pernapasan, penyakit kulit, dan infeksi lainnya. Oleh karena itu, menjaga kebersihan lingkungan adalah tanggung jawab kita bersama.</p>

                        <h2>Cara Menjaga Kesehatan Lingkungan</h2>
                        <p class="highlight">Beberapa langkah sederhana yang bisa kita lakukan untuk menjaga lingkungan tetap sehat antara lain:</p>
                        <ul>
                            <li>Mengelola sampah dengan baik dan melakukan daur ulang.</li>
                            <li>Menghemat air dan energi.</li>
                            <li>Menanam pohon untuk menjaga kualitas udara.</li>
                            <li>Mengurangi penggunaan plastik sekali pakai.</li>
                        </ul>

                        <h2>Ayo Bergerak Bersama!</h2>
                        <p>Dengan langkah kecil yang kita lakukan setiap hari, kita dapat membuat perbedaan besar bagi lingkungan dan kesehatan kita di masa depan. Mari kita jaga bumi kita agar tetap sehat dan hijau!</p>
                <!-- <table class="table table-borderless" data-aos="fade-right" data-aos-delay="1000">
                    <tr>
                        
                    </tr>
                </table> -->
            </div>
            <div class="col-md-5 mt-4" data-aos="fade-left" data-aos-delay="1000">
                <img width="100%" style="border-radius: 10px;" src="foto/profil.webp">
            </div>
        </div>
    </div>

    <div class="container marketing" id="galeri">
        <div class="row featurette">
            <div class="col-md-12">
                <center>
                    <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down"
                        data-aos-delay="500">
                        <b>Galeri</b>
                    </h2>
                </center>
                <br>
            </div>
        </div>

        <div class="row">
            {{-- looping galeri --}}
            @foreach ($galeri as $row)
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="500">
                    <div class="card">
                        <img style="height: 400px; object-fit: cover;" src="{{ asset('foto/' . $row->foto) }}"
                            class="card-img-top img-clickable" alt="{{ $row->judul }}" data-bs-toggle="modal"
                            data-bs-target="#modalFoto{{ $row->id }}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal untuk menampilkan galeri dalam ukuran penuh -->
    @foreach ($galeri as $row)
        <div class="modal fade text-dark" id="modalFoto{{ $row->id }}" tabindex="-1" aria-labelledby="modal1Label"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body
                        text-center">
                        <img src="{{ asset('foto/' . $row->foto) }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Video -->
    <div class="container marketing" id="video">
        <div class="row featurette">
            <div class="col-md-12">
                <center>
                    <h2 class="featurette-heading fw-normal lh-1 text-hitam" data-aos="fade-down"
                        data-aos-delay="500">
                        <b>Video</b>
                    </h2>
                </center>
                <br>
            </div>
        </div>

        <div class="row">
            {{-- looping video --}}
            @foreach ($videos as $row)
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="500">
                    <div class="card">
                        <div class="card-img-top img-clickable text-center" data-bs-toggle="modal"
                            data-bs-target="#modalVideo{{ $row->id }}">
                            <video width="150" height="100" controls>
                                <source src="{{ asset('video/' . $row->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title
                            ">{{ $row->judul }}</h5>
                            <p class="card-text">{{ strip_tags($row->deskripsi) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Modal untuk menampilkan video dalam ukuran penuh -->
    @foreach ($videos as $row)
        <div class="modal fade
            text-dark" id="modalVideo{{ $row->id }}" tabindex="-1" aria-labelledby="modal1Label" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body
                        text-center">
                        <video width="100%" controls>
                            <source src="{{ asset('video/' . $row->video) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

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
            {{-- looping blog --}}
            @foreach ($blogs as $row)
                <div class="col-md-4 mb-4" data-aos="fade-right" data-aos-delay="500">
                    <div class="card">
                        <img style="height: 400px; object-fit: cover;" src="{{ asset('blog/' . $row->foto) }}"
                            class="card-img-top img-clickable" alt="{{ $row->judul }}" data-bs-toggle="modal"
                            data-bs-target="#modalBlog{{ $row->id }}">
                        <div class="card-body">                            
                            <h5 class="card-title
                            ">{{ $row->judul }}</h5>
                            <p class="card-text">{{ strip_tags(substr($row->deskripsi,0, 20)) }}</p>
                            <a href="{{ url('blogdetail/' . $row->id) }}" class="btn btn-primary">Lihat</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    <div class="container" data-aos="fade-up" data-aos-delay="100" id="kontak">
        <center>
            <h2 class="featurette-heading fw-normal lh-1 text-hitam"><b>Kontak</b></h2>
        </center>
        <br>
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-map"></i>
                    <h3>Alamat</h3>
                    <p>Dusun Laut Tador, Desa Laut Tador, Kecamatan Laut Tador, Kabupaten Batu Bara, Provinsi
                        Sumatera Utara, Indonesia</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="info-item d-flex flex-column justify-content-center align-items-center">
                    <i class="bi bi-envelope"></i>
                    <h3>Email</h3>
                    <p>email@gmail.com</p>
                    <br>
                </div>
            </div>
        </div>

        <div class="row gy-4 mt-1">
            <div class="col-lg-12 ">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63732.240383392455!2d99.2147280464463!3d3.2843576027436607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3033d9380ccf27a1%3A0xe67633889f0ab0f7!2sLaut%20Tador%2C%20Kec.%20Sei%20Suka%2C%20Kabupaten%20Batu%20Bara%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1739590482929!5m2!1sid!2sid"
                    width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
    <div style="padding-top: 100px;"></div>
@endsection
